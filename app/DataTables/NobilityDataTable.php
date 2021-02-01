<?php

namespace App\DataTables;

use App\Models\Nobility;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class NobilityDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('edit', 'admin.nobility.btn.edit')
            ->addColumn('delete', 'admin.nobility.btn.delete')
            ->rawColumns([
                'edit',
                'delete'
            ]);
    }


    public function query(Nobility $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
            ->setTableId('Nobility-table')
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

            Column::make('EntityUID')
                ->width(35)
                ->title('Player UID')
                ->searchable(true)
                ->orderable(false)
                ->addClass('text-center'),

            Column::make('Donation')
                ->title('Donation')
                ->width(35)
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('EntityName')
                ->orderable(false)
                ->title('Player Name')
                ->width(35)
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
        return 'Nobility_' . date('YmdHis');
    }
}
