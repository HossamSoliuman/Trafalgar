<!DOCTYPE html>
<html lang="en">
<head>
  <title>Trafalgar property</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container my-3">
  <h2 class="my-4">Agent detail</h2>
  
  <div class="card" >
   
      <div class="row">
          
    <div class="col-sm-3 my-2">
      <img height="200px" width="200px" src="{{ $agentDetail->photo_url }}" class="card-img-top" alt="...">
    </div>
 
  </div>

 
  <div class="card-body">
    <h5 class="card-title">{{ (isset($agentDetail->headline))?$agentDetail->headline:"" }}</h5>
   
    
 
     <h6>Agent Name - {{ (isset($agentDetail->first_name))?$agentDetail->first_name:"" }}</h6>
    <h6>Mobile number  - {{ (isset($agentDetail->first_name))?$agentDetail->mobile_number:"" }}</h6>
      <h6>job title  - {{ (isset($agentDetail->job_title))?$agentDetail->job_title:"" }}</h6>
    <p class="card-text">Email - {{ (isset($agentDetail->email))?$agentDetail->email:"" }}</p>
  
  </div>



  </div>
  
  <div class="container mt-4">
      <h3>Contact to agent</h3>
      <form action="{{ route('mails') }}" method="post">
          @csrf
           <div class="form-group">
    <label for="username">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" id="username" name="username">
  </div>
  
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
  </div>
   <input type="hidden"    name="agentid" value="{{ (isset($_GET['agentid']))?$_GET['agentid']:""}}">
  <div class="form-group">
    <label for="phone">Phone:</label>
    <input type="text" class="form-control" placeholder="Enter phone" id="phone" name="phone">
  </div>
  
   <div class="form-group">
    <label for="message">Message:</label>
    <input type="text" class="form-control" placeholder="Enter message" id="message" name="message">
  </div>
  

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      
  </div>
  
  
  
   <h3>Property regards to agent<h3>
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
