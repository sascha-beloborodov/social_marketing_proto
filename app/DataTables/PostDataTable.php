<?php

namespace App\DataTables;

use App\Models\Post;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class PostDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'templates.posts.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Post $model)
    {
        return $model->with('contentType', 'period', 'purchaseModel')->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '80px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'scrollX' => true,
                'buttons' => [
                    'create',
                    'export',
                    'print',
                    'reset',
                    'reload',
                ],
                'preDrawCallback' => "function () {
                    console.log(this.language);
                }",
                'initComplete' => "function () {
                    this.api().columns().every(function (a, b) {
                        console.log(a);
                        console.log(b);
                    });
                }",
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'url',
            'content_type.name',
            'period.name',
            'purchase_model.name',
            'reach',
            'impressions',
            'clicks',
            'likes',
            'shares',
            'comments',
            'group_in',
            'site_visits',
            'purchase_intentions',
            'transactions',
//            'social_id',
            'er_comments',
            'er_likes',
            'er_shares',
            'calculation_group_in',
            'calculation_visits',
            'calculation_purchase',
            'calculation_transactions'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'postsdatatable_' . time();
    }
}