<?php

namespace App\DataTables;

use App\Models\Player;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PlayersDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('edit', 'admin.players.btn.edit')
            ->addColumn('delete', 'admin.players.btn.delete')
            ->rawColumns([
                'edit',
                'delete'
            ]);
    }


    public function query(Player $model)
    {
        return $model->newQuery();
    }

    public function html()
    {
        return $this->builder()
                    ->setTableId('players-table')
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

            Column::make('UID')
                ->width(35)
                ->title('UID')
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('Owner')
                ->width(35)
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('Money')
                ->width(35)
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('ConquerPoints')
                ->width(35)
                ->title('ConquerPoints')
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('Level')
                ->width(35)
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('Reborn')
                ->width(35)
                ->searchable(true)
                ->addClass('text-center'),

            Column::make('WarehousePW')
                ->width(25)
                ->title('Bank PW')
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
        return 'Players_' . date('YmdHis');
    }
}
