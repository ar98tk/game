<?php

namespace App\DataTables;

use App\Models\Account;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class AccountsDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('edit', 'admin.accounts.btn.edit')
            ->addColumn('delete', 'admin.accounts.btn.delete')
            ->rawColumns([
                'edit',
                'delete'
            ]);
    }


    public function query(Account $model)
    {
        return Account::query();
    }

    public function html()
    {
        return $this->builder()
                    ->setTableId('accounts-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Blfrtip')
                    ->orderBy(1)
                    ->lengthMenu([[10, 25, 50, 10000], [10, 25, 50, 'All Record']])
                    ->buttons(
                        Button::make('create')
                        ->text('<i class="fa fa-plus">Create Account</i>')
                        ->className('btn btn-primary'),
                        Button::make('csv')
                            ->text('<i class="fa fa-file-csv"> Export CSV</i>')
                            ->className('btn btn-info'),
                        Button::make('excel')
                            ->text('<i class="fa fa-file-excel"> Export Excel</i>')
                            ->className('btn btn-success'),
                        Button::make('pdf')
                            ->text('<i class="fa fa-file-pdf"> Export PDF</i>')
                            ->className('btn btn-danger'),
                        Button::make('print')->className('btn btn-primary'),

                        Button::make('reload')
                            ->text('<i class="fa fa-recycle"> Reload</i>')
                            ->className('btn btn-warning')
                    );
    }

    protected function getColumns()
    {
        return [
            Column::make('Username')
                ->width(25)
                ->title('Username')
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('Password')
                ->width(25)
                ->title('Password')
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('Email')
                ->width(25)
                ->title('Email')
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('MobileNumber')
                ->width(25)
                ->title('Mobile')
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('State')
                ->width(25)
                ->title('State')
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('IP')
                ->width(25)
                ->title('IP')
                ->searchable(true)
                ->addClass('text-center'),

            Column::computed('edit')
                ->exportable(false)
                ->printable(false)
                ->width(20)
                ->addClass('text-center'),

            Column::computed('delete')
                ->exportable(false)
                ->printable(false)
                ->width(20)
                ->addClass('text-center'),
        ];
    }


    protected function filename()
    {
        return 'Accounts_' . date('YmdHis');
    }
}
