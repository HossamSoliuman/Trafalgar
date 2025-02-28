<?php

namespace App\Exports;

use App\Models\EntegralApiData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WeeklyPropertyReportExport implements FromCollection ,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array {
    return [ ucfirst("S.no"), ucfirst("property id"), ucfirst("mandate saletype"), ucfirst("mandate saletypeunit"), ucfirst("mandate status"), ucfirst("mandate type"), ucfirst("mandate startdate"), ucfirst("mandate enddate"), ucfirst("price"), ucfirst("property classification"), ucfirst("property type"), ucfirst("photo thumbnail"), ucfirst("news featured image"), ucfirst("country"), ucfirst("province"), ucfirst("town"), ucfirst("suburb"), ucfirst("map location available"), ucfirst("street number"), ucfirst("street name"), ucfirst("unit number"), ucfirst("complex name"), ucfirst("agent id"), ucfirst("agent name"), ucfirst("added"), ucfirst("updated"), ucfirst("location lat"), ucfirst("location long"), ucfirst("floor size"), ucfirst("floor size unit"), ucfirst("land size"), ucfirst("land size unit"), ucfirst("pool"), ucfirst("no pets allowed"), ucfirst("garages"), ucfirst("covered parking"), ucfirst("open parking"), ucfirst("bedrooms"), ucfirst("bathrooms"), ucfirst("furnished"), ucfirst("living areas"), ucfirst("days on market"), ucfirst("days to expiry"), ucfirst("headline"), ucfirst("description"), ucfirst("rates taxes"), ucfirst("rates taxes unit"), ucfirst("levy"), ucfirst("levy unit"), ucfirst("photos"), ucfirst("contacts"), ucfirst("features"), ucfirst("files"), ucfirst("links"), ucfirst("api city key"), ucfirst("apin type name"),ucfirst("is property new"),ucfirst("Separate toilet"),ucfirst("Additional charges"),ucfirst("Security tag"),ucfirst("Staff tag"),ucfirst("Study tag"),ucfirst("Carpeted tag"),ucfirst("Video url"), ucfirst("created at"), ucfirst("updated at") ];
  } 
 
    public function collection()
    {
        $data =  EntegralApiData::select('id', 'property_id', 'mandate_saletype', 'mandate_saletypeunit', 'mandate_status', 'mandate_type', 'mandate_startdate', 'mandate_enddate', 'price', 'property_classification', 'property_type', 'photo_thumbnail', 'news_featured_image', 'country', 'province', 'town', 'suburb', 'map_location_available', 'street_number', 'street_name', 'unit_number', 'complex_name', 'agent_id', 'agent_name', 'added', 'updated', 'location_lat', 'location_long', 'floor_size', 'floor_size_unit', 'land_size', 'land_size_unit', 'pool', 'no_pets_allowed', 'garages', 'covered_parking', 'open_parking', 'bedrooms', 'bathrooms', 'furnished', 'living_areas', 'days_on_market', 'days_to_expiry', 'headline', 'description', 'rates_taxes', 'rates_taxes_unit', 'levy', 'levy_unit', 'photos', 'contacts', 'features', 'files', 'links', 'api_city_key', 'api_type_name', 'is_property_new', 'separate_toilet', 'additional_charges', 'security_tag', 'staff_tag', 'study_tag', 'carpeted_tag', 'video_url',  'created_at', 'updated_at')->get();
        foreach($data as $key => $value){
            if($data[$key]->furnished == ""){
                $data[$key]->furnished = "No";
            }
            if($data[$key]->furnished == "Y"){
                 $data[$key]->furnished = "Yes";
            }
            
            if($data[$key]->map_location_available == "0"){
                $data[$key]->map_location_available = "No";
            }
            if($data[$key]->map_location_available == "1"){
                 $data[$key]->map_location_available = "Yes";
            }
            
            
        }
       
        return $data;
    }
}
