<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// PEMASUKAN
$routes->get('pemasukan_input', 'Pemasukan::index');
$routes->post('pemasukan/store', 'Pemasukan::store');
$routes->get('pemasukan_sumberdana', 'PemasukanSumberDana::index');
$routes->get('pemasukan_sumberdana_each', 'PemasukanSumberDanaEach::index');
$routes->post('pemasukan/update/(:num)', 'Pemasukan::update/$1');
$routes->post('pemasukan/delete/(:num)', 'Pemasukan::delete/$1');
$routes->get('pemasukan/cetak', 'Pemasukan::cetak');
$routes->post('pemasukan/cetak', 'Pemasukan::cetak');

// PENGELUARAN UMUM
$routes->get('pengeluaran_input', 'Pengeluaran::index');
$routes->post('pengeluaran/store', 'Pengeluaran::store');
$routes->post('pengeluaran/update/(:num)', 'Pengeluaran::update/$1');
$routes->post('pengeluaran/delete/(:num)', 'Pengeluaran::delete/$1');
$routes->post('pengeluaran/cetak', 'Pengeluaran::cetak');

// PENGELUARAN KEGIATAN
$routes->get('pengeluaran_kegiatan', 'PengeluaranKegiatan::index');
$routes->get('pengeluaran_kegiatan/create', 'PengeluaranKegiatan::create');
$routes->post('pengeluaran_kegiatan/store', 'PengeluaranKegiatan::store');
$routes->post('pengeluaran_kegiatan/update/(:num)', 'PengeluaranKegiatan::update/$1');
$routes->post('pengeluaran_kegiatan/delete/(:num)', 'PengeluaranKegiatan::delete/$1');
$routes->post('pengeluaran_kegiatan/cetak', 'PengeluaranKegiatan::cetak');
$routes->get('pengeluaran_kegiatan_each/(:num)', 'PengeluaranKegiatan::show/$1');
$routes->get('pengeluaran_kegiatan_each/delete/(:num)', 'PengeluaranKegiatanEach::delete/$1');

// PENGELUARAN BIDANG
$routes->get('pengeluaran_bidang', 'PengeluaranBidang::index');
$routes->post('pengeluaran_bidang/store', 'PengeluaranBidang::store');
$routes->post('pengeluaran_bidang/delete/(:num)', 'PengeluaranBidang::delete/$1');

// PENGELUARAN BIDANG EACH
$routes->get('pengeluaran_bidang_each', 'PengeluaranBidangEach::index');
$routes->post('pengeluaran_bidang_each/store', 'PengeluaranBidangEach::store');
$routes->post('pengeluaran_bidang_each/update/(:num)', 'PengeluaranBidangEach::update/$1');
$routes->post('pengeluaran_bidang_each/delete/(:num)', 'PengeluaranBidangEach::delete/$1');
$routes->get('pengeluaran_bidang_each/cetak', 'PengeluaranBidangEach::cetak');

// PENGELUARAN BIDANG EACH 1
$routes->get('pengeluaran_bidang_each1', 'PengeluaranBidangEach1::index');
$routes->post('pengeluaran_bidang_each1/store', 'PengeluaranBidangEach1::store');
$routes->post('pengeluaran_bidang_each1/update/(:num)', 'PengeluaranBidangEach1::update/$1');
$routes->post('pengeluaran_bidang_each1/delete/(:num)', 'PengeluaranBidangEach1::delete/$1');
$routes->get('pengeluaran_bidang_each1/cetak', 'PengeluaranBidangEach1::cetak');

// PENGELUARAN BIDANG EACH 2
$routes->get('pengeluaran_bidang_each2', 'PengeluaranBidangEach2::index');
$routes->post('pengeluaran_bidang_each2/store', 'PengeluaranBidangEach2::store');
$routes->post('pengeluaran_bidang_each2/update/(:num)', 'PengeluaranBidangEach2::update/$1');
$routes->post('pengeluaran_bidang_each2/delete/(:num)', 'PengeluaranBidangEach2::delete/$1');
$routes->get('pengeluaran_bidang_each2/cetak', 'PengeluaranBidangEach2::cetak');

// PENGELUARAN BIDANG EACH 3
$routes->get('pengeluaran_bidang_each3', 'PengeluaranBidangEach3::index');
$routes->post('pengeluaran_bidang_each3/store', 'PengeluaranBidangEach3::store');
$routes->post('pengeluaran_bidang_each3/update/(:num)', 'PengeluaranBidangEach3::update/$1');
$routes->post('pengeluaran_bidang_each3/delete/(:num)', 'PengeluaranBidangEach3::delete/$1');
$routes->get('pengeluaran_bidang_each3/cetak', 'PengeluaranBidangEach3::cetak');

// PENGELUARAN BIDANG EACH 4
$routes->get('pengeluaran_bidang_each4', 'PengeluaranBidangEach4::index');
$routes->post('pengeluaran_bidang_each4/store', 'PengeluaranBidangEach4::store');
$routes->post('pengeluaran_bidang_each4/update/(:num)', 'PengeluaranBidangEach4::update/$1');
$routes->post('pengeluaran_bidang_each4/delete/(:num)', 'PengeluaranBidangEach4::delete/$1');
$routes->get('pengeluaran_bidang_each4/cetak', 'PengeluaranBidangEach4::cetak');

// PENGELUARAN SUBBIDANG
$routes->get('pengeluaran_subbidang', 'PengeluaranSubbidang::index');
$routes->get('pengeluaran_subbidang_each/(:num)', 'PengeluaranSubbidangEach::index/$1');
$routes->post('pengeluaran_subbidang/delete/(:num)', 'PengeluaranSubbidang::delete/$1');
$routes->post('pengeluaran_subbidang/store', 'PengeluaranSubbidang::store');
$routes->get('pengeluaran_subbidang/cetak', 'PengeluaranSubbidang::cetak');
$routes->post('pengeluaran_subbidang/update/(:num)', 'PengeluaranSubbidang::update/$1');


// TRANSAKSI ALL
$routes->get('transaksi_all', 'TransaksiAll::index');
$routes->post('transaksi_all/store', 'TransaksiAll::store');
$routes->post('transaksi_all/update/(:num)', 'TransaksiAll::update/$1');
$routes->post('transaksi_all/delete/(:num)', 'TransaksiAll::delete/$1');
$routes->get('transaksi_all/cetak', 'TransaksiAll::cetak');

