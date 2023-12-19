
<div class="row">
  <div class="col-sm-3 mt-3">
    <div class="card ml-10 bg-dark">
      <div class="card-body">
        <h5 class="card-title text-center text-white">Today's Sales</h5>
        <p class="card-text text-center text-white">{{$todaySales}}</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-3 mt-3">
    <div class="card ml-10 bg-warning">
      <div class="card-body">
        <h5 class="card-title text-center text-dark">Yesterday Sales</h5>
        <p class="card-text text-center text-dark">{{$yesterdaySales}}</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-3 mt-3">
    <div class="card ml-10 bg-dark">
      <div class="card-body">
        <h5 class="card-title text-center text-white">This Month's Sales</h5>
        <p class="card-text text-center text-white">{{$thisMonthSales}}</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-3 mt-3">
    <div class="card ml-10 bg-dark">
      <div class="card-body">
        <h5 class="card-title text-center text-white">Last Month's Sales</h5>
        <p class="card-text text-center text-white">{{$lastMonthSales}}</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-3 mt-3">
    <div class="card ml-10 bg-dark">
      <div class="card-body">
        <h5 class="card-title text-center text-white">Product Stock</h5>
        <p class="card-text text-center text-white">{{$sum}}</p>
        
      </div>
    </div>
  </div>
</div>