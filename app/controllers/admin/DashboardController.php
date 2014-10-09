<?php namespace Controllers\Admin;

use AdminController;
use BaseController;
use View;
use Pegawai;
use paginate;

class DashboardController extends AdminController {

	/**
	 * Show the administration dashboard page.
	 *
	 * @return View
	 */
	public function getIndex()
	{
		// Show the page
		return View::make('admin/index');
	}

	public function getProses()
	{
		$data = Pegawai::paginate(10);

		return View::make('admin/Proses/index', compact('data'));
	}

}
