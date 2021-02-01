<?php

namespace App\DataTables;

use App\Models\Contact;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class MessagesDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('show',   'admin.messages.btn.show')
            ->addColumn('delete', 'admin.messages.btn.delete')
            ->rawColumns([
                'show',
                'delete'
            ]);
    }


    public function query(Contact $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
                    ->setTableId('messages-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Blfrtip')
                    ->orderBy(1)
                    ->lengthMenu([[10, 25, 50, 10000], [10, 25, 50, 'All Record']])
                    ->buttons(
                        /*Button::make('create')
                        ->text('<i class="fa fa-print"></i>')
                        ->className('btn btn-primary'),*/
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

            Column::make('id')
                ->width(35)
                ->title('ID')
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('name')
                ->width(35)
                ->title('Name')
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('email')
                ->width(35)
                ->searchable(true)
                ->title('Email')
                ->addClass('text-center'),

            Column::make('mobile')
                ->width(35)
                ->title('Mobile')
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('status')
                ->width(35)
                ->title('Status')
                ->searchable(true)
                ->addClass('text-center'),


            Column::computed('show')
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
        return 'Players_' . date('YmdHis');
    }
}
