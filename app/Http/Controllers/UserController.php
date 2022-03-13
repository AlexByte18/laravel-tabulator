<?php

namespace App\Http\Controllers;

use App\Repositories\RepositoryInterface;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // TODO: Update php8
    // protected RepositoryInterface|UserRepositoryInterface $repository;
    protected RepositoryInterface $repository;

    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }


    /**
     * @return Application|Factory|View
     */
    public function index() {
        return view("tabulator.index");
    }


    /**
     * @return Application|Factory|View
     */
    public function basic() {
        return view("tabulator.basic", [
            "id" => "tabulator-basic-table"
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function localization() {
        return view("tabulator.localization", [
            "id" => "tabulator-localization-table"
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function sorters() {
        return view("tabulator.sorters", [
            "id" => "tabulator-sorters-table"
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function columnFilter() {
        return view("tabulator.column-filter", [
            "id" => "tabulator-column-filter-table"
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function globalFilter() {
        return view("tabulator.global-filter", [
            "id" => "tabulator-global-filter-table",
        ]);
    }

    /**
     * @return Application|Factory|View
     */
    public function export()
    {
        return view("tabulator.export", [
            "id" => "tabulator-export-table",
        ]);
    }

    public function json(): array {
        return $this->repository->tabulatorPagination();
    }
}
