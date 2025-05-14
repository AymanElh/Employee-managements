<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use App\Models\Employee;
use Carbon\Carbon;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;


class ListEmployees extends ListRecords
{
    protected static string $resource = EmployeeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'All' => Tab::make(),
            'This week' => Tab::make()
                ->icon('heroicon-m-bell')
                ->badge(Employee::query()->where('date_hired', '>=', now()->subWeek())->count())
                ->modifyQueryUsing(function(Builder $query) {
                    return $query->where('date_hired', '>=', now()->subWeek());
                }),
            'This month' => Tab::make()
                ->badge(Employee::query()->where('date_hired', '>=', now()->subMonth())->count())
                ->modifyQueryUsing(function(Builder $query) {
                    return $query->where('date_hired', '>=', now()->subMonth());
                })
        ];
    }
}
