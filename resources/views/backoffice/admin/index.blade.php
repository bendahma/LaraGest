@extends('layouts.adminTemplate')

@section('stat')
              <!-- Page Heading -->
              <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
              </div>
    
              <!-- Content Row -->
              <div class="row">
    
                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                  <div class="card border-primary shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Revenu ( {{date('M Y')}} )</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">  </div>
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
                  <div class="card border-success shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Earnings (Annual)</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
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
                  <div class="card border-info shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                          <div class="row no-gutters align-items-center">
                            <div class="col-auto">
                              <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
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
                  <div class="card border-warning shadow h-100 py-2">
                    <div class="card-body">
                      <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pending Requests</div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
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
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary d-flex">Le revenu du mois {{date('M Y')}}
                      </h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <div class="chart-area" id="chart"></div>
                    </div>
                  </div>
                </div>
    
                <!-- Pie Chart -->
                <div class="col-xl-4 col-lg-5">
                  <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                      <h6 class="m-0 font-weight-bold text-primary">Les Produits Les Plus Vendu</h6>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>R??f</th>
                            <th>Produit</th>
                            <th>Quantit??</th>
                          </tr>
                        </thead>
                        <tbody>
                           @forelse ($products as $product)
                           <tr>
                              <td style="width:10%"> {{$product->refProduit}} </td>
                              <td style="width:70%"> {{$product->name}} </td>
                              <td> {{$product->qtt}} </td>
                            </tr>
                           @empty
                           <tr>
                              <td colspan="3" class="text-center">Aucun information est disponible</td>
                           </tr>
                           @endforelse
                         
                          
                        </tbody>
                      </table>
                     
                    </div>
                  </div>
                </div>
              </div>
@endsection


@section('scripts')
    
@endsection