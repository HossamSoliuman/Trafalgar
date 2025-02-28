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
  
  
 <div class="card" >
     @if(!empty($propertyData->photos))
      <div class="row">
            @for($r =0; $r < count($propertyData->photos); $r++)
    <div class="col-sm-3 my-2">
      <img height="200px" width="200px" src="{{ $propertyData->photos[$r]['url_thumb'] }}" class="card-img-top" alt="...">
    </div>
   @endfor
  </div>
  @endif
 
  <div class="card-body">
    <h5 class="card-title">{{ (isset($propertyData->headline))?$propertyData->headline:"" }}</h5>
   
    
    <h6>R {{ (isset($propertyData->listing_price))? number_format($propertyData->listing_price):"" }}</h6>
     <h6>Property Type - {{ (isset($propertyData->property_type))?$propertyData->property_type:"" }}</h6>
    <h6>complex Name - {{ (isset($propertyData->location_complexName))?$propertyData->location_complexName:"" }}</h6>
     <h6>Address - {{ (isset($propertyData->location_streetNumber))?$propertyData->location_streetNumber." , ".$propertyData->location_streetName:"" }}</h6>
     <h6>Suburb - {{ (isset($propertyData->location_suburb))?$propertyData->location_suburb:"" }}</h6>
     <h6>City - {{ (isset($propertyData->property_type))?$propertyData->location_suburb:"" }}</h6>
        <h6>Town - {{ (isset($propertyData->location_town))?$propertyData->location_town:"" }}</h6>
     
      <h6>Country - {{ (isset($propertyData->location_country))?$propertyData->location_country:"" }}</h6>
     <h6>Sale type - {{ (isset($propertyData->mandate_saletype))?$propertyData->mandate_saletype:"" }}</h6>
      
     
         <h6>floor size - {{ (isset($propertyData->floor_size))?$propertyData->floor_size." ".$propertyData->floor_size_unit:"" }}</h6>
    <p class="card-text">{{ (isset($propertyData->description))?$propertyData->description:"" }}</p>
  
  </div>



  </div>
  
 
</div>

</body>
</html>
