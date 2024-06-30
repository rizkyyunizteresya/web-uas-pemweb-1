
@extends('layouts.app')
@section('title','dashboard')
@section('contents') 
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                Transaksi hari ini</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">$100,000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div> 

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                Total transaksi</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">200,000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total customer
              </div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">10</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                Total pendapatan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">1000,000</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-comments fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->

  <div class="row">

    <!-- Area Chart -->
    <div class="col-xl-8 col-lg-7">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card mb-4">
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Harga Laundry</h6>
              <div class="dropdown no-arrow">
                  <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Pilihan:</div>
                      <a class="dropdown-item" href="#">Tambah Item</a>
                      <a class="dropdown-item" href="#">Edit Item</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Hapus Semua</a>
                  </div>
              </div>
          </div>
          <!-- daftar harga -->
        <div class="card-bod
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Jenis Cucian</th>
                              <th>Kategori Cucian</th>
                              <th>Harga per Kg</th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr>
                              <td>1</td>
                              <td>Cuci Pakaian</td>
                              <td>Cuci Mamel</td>
                              <td>Rp 10,000</td>
                          </tr>
                          <tr>
                              <td>2</td>
                              <td>Cuci Pakaian </td>
                              <td>Cuci Kering</td>
                              <td>Rp 12,000</td>
                          </tr>
                          <tr>
                              <td>3</td>
                              <td>Cuci Pakaian</td>
                              <td>Cuci Setrika</td>
                              <td>Rp 15,000</td>
                          </tr>
                          <tr>
                              <td>4</td>
                              <td>Cuci Sepatu</td>
                              <td>Cuci Kering</td>
                              <td>Rp 20,000</td>
                          </tr>
                          <tr>
                              <td>5</td>
                              <td>Cuci Bed Cover</td>
                              <td>Cuci Basah</td>
                              <td>Rp 25,000</td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>Cuci Gorden</td>
                            <td>Cuci  Kering</td>
                            <td>Rp 15,000</td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>Cuci Karpet</td>
                          <td>Cuci Basah</td>
                          <td>Rp 25,000</td>
                      </tr>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-area">
            <canvas id="myAreaChart"></canvas>
          </div>
        </div>
      </div>
    </div>

    <!-- our service -->
    <div class="col-xl-4 col-lg-5">
      <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
          <h6 class="m-0 font-weight-bold text-primary">Laundry Service</h6>
          <div class="dropdown no-arrow">
              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                  <div class="dropdown-header">Dropdown Header:</div>
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
              </div>
          </div>
      </div>
      <div class="card-body">
          <h5 class="card-title">Our Services</h5>
          <ul class="list-unstyled">
              <li class="media my-4">
                  <i class="fas fa-tshirt fa-2x mr-3 text-primary"></i>
                  <div class="media-body">
                      <h6 class="mt-0 mb-1">Wash and Fold Service</h6>
                      We provide high-quality wash and fold services.
                  </div>
              </li>
              <li class="media my-4">
                  <i class="fas fa-soap fa-2x mr-3 text-primary"></i>
                  <div class="media-body">
                      <h6 class="mt-0 mb-1">Dry Cleaning</h6>
                      Professional dry cleaning for your delicate clothes.
                  </div>
              </li>
              <li class="media my-4">
                  <!-- Alternatif ikon untuk setrika -->
                  <i class="fas fa-wind fa-2x mr-3 text-primary"></i> <!-- Alternatif: fa-wind -->
                  <div class="media-body">
                      <h6 class="mt-0 mb-1">Ironing Service</h6>
                      Perfect ironing service for wrinkle-free clothes.
                  </div>
              </li>
              <li class="media my-4">
                  <i class="fas fa-shoe-prints fa-2x mr-3 text-primary"></i>
                  <div class="media-body">
                      <h6 class="mt-0 mb-1">Shoe Cleaning</h6>
                      Expert cleaning for all types of shoes.
                  </div>
              </li>
          </ul>
          <h5 class="card-title mt-4">Contact Us</h5>
          <div class="media my-4">
              <i class="fas fa-phone fa-2x mr-3 text-primary"></i>
              <div class="media-body">
                  <h6 class="mt-0 mb-1">Phone</h6>
                  +62 123 456 7890
              </div>
          </div>
          <div class="media my-4">
              <i class="fas fa-envelope fa-2x mr-3 text-primary"></i>
              <div class="media-body">
                  <h6 class="mt-0 mb-1">Email</h6>
                  new@laundryservice.com
              </div>
          </div>
      </div>
        <!-- Card Body -->
        <div class="card-body">
          <div class="chart-pie pt-4 pb-2">
            <canvas id="myPieChart"></canvas>
          </div>
          <div class="mt-4 text-center small">
            <span class="mr-2">
              <i class="fas fa-circle text-primary"></i> Direct
            </span>
            <span class="mr-2">
              <i class="fas fa-circle text-success"></i> Social
            </span>
            <span class="mr-2">
              <i class="fas fa-circle text-info"></i> Referral
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">

      

      <!-- Color System -->
     
    </div>

    
  </div>
@endsection
