<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container my-3">
  <h2 class="my-4">Property search Result</h2>
   <h4>city/Suburb/Country : {{ $_GET['city'] }}</h4>
       <h4>stype : {{ (isset($_GET['stype']) && $_GET['stype'] !="")? $_GET['stype']: "" }}</h4>
        <h4>ptype : {{ (isset($_GET['ptype']) && $_GET['ptype'] !="")?$_GET['ptype']:"" }}</h4>
        <h4>minprice : {{ (isset($_GET['minprice']) && $_GET['minprice'] !="")?$_GET['minprice']:"" }}</h4>
         <h4>maxprice : {{ (isset($_GET['maxprice']) && $_GET['maxprice'] !="")?$_GET['maxprice']:"" }}</h4>
          <h4>beds : {{ (isset($_GET['beds']) && $_GET['beds'] !="")?$_GET['beds']:"" }}</h4>
           <h4>bath : {{ (isset($_GET['bath']) && $_GET['bath'] !="")?$_GET['bath']:"" }}</h4>
            <h4>garage : {{ (isset($_GET['garage']) && $_GET['garage'] !="")?$_GET['garage']:"" }}</h4>
             <h4>parking : {{ (isset($_GET['prkng']) && $_GET['prkng'] !="")?$_GET['prkng']:"" }}</h4>
               <h4>floor Min Size : {{ (isset($_GET['fminsize']) && $_GET['fminsize'] !="")?$_GET['fminsize']:"" }}</h4>
                <h4>floor Max Size : {{ (isset($_GET['fmaxsize']) && $_GET['fmaxsize'] !="")?$_GET['fmaxsize']:"" }}</h4>
  <div class="row ">
     
 
  @foreach($propertyDatas as $propertyData)
    <div class="col-md-4 my-4">
 <div class="card" style="width: 18rem;">
  <img height="200px" width="200px" src="{{ $propertyData->photo_thumbnail }}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{ $propertyData->headline }}</h5>
   
    
    <h6>R {{  number_format($propertyData->price) }}</h6>
    <h6>Property Type - {{ $propertyData->property_type }}</h6>
     <h6>Suburb - {{ $propertyData->suburb }}</h6>
     <h6>City - {{ $propertyData->town }}</h6>
      <h6>Country - {{ $propertyData->country }}</h6>
     <h6>Sale type - {{ $propertyData->mandate_saletype }}</h6>
      <h6>Bedrooms - {{ $propertyData->bedrooms }}</h6>
       <h6>Bathrooms - {{ $propertyData->bathrooms }}</h6>
        <h6>Garage - {{ $propertyData->garages }}</h6>
       <h6>covered parking - {{ $propertyData->covered_parking }}</h6>
        <h6>open parking - {{ $propertyData->open_parking }}</h6>
         <h6>floor size - {{ $propertyData->floor_size." ".$propertyData->floor_size_unit }}</h6>
    <p class="card-text">{{ substr($propertyData->description,0,60) }}</p>
    <a href="{{ route('getPropertyDetail', ['propertid' => $propertyData->property_id]) }}" class="btn btn-primary">Get More Detail</a>
  </div>
</div>
</div>
@endforeach

  </div>
  
   {{ $propertyDatas->links() }}
</div>

</body>
</html>
