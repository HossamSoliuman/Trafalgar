<?php

namespace App\Exports;

use App\Models\EntegralApiData;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WeeklyPropertyReportExport implements FromCollection, WithHeadings
{
    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            "S.No",
            "Property Name",
            "Property Code",
            "Property Description",
            "Rental Price",
            "Number Of Images Loaded",
            "Erf Size",
            "Floor Area",
            "Agent Name",
            "Agent Telephone",
            "Agent Email Address",
            "Directions",
            "Bathrooms",
            "Bedrooms",
            "Family Room",
            "Separate Toilet",
            "CarPort",
            "Garage",
            "Pool",
            "Additional Charges",
            "Security",
            "Staff",
            "Study",
            "Carpeted",
            "Parking",
            "Videourl",
            "MKT Type",
            "Furnished",
            "Google Map",
            "Total Image File Size (KB)",
            "Property Overview Detail",
            "Listing Date",
            "Age of Listing (Days)",
            "Street Address / Complex Name",
            "Suburb",
            "City",
            "Province",
            "Rent/Sale"
        ];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $data = EntegralApiData::selectRaw('
            id,
            property_name,
            property_id,
            description,
            price,
            photos,
            land_size,
            floor_size,
            IFNULL((SELECT CONCAT(first_name, " ", last_name) FROM agents WHERE agents.agent_id = entegral_api_data.agent_id), agent_name) as agent_name,
            IFNULL((SELECT mobile_number FROM agents WHERE agents.agent_id = entegral_api_data.agent_id), agent_phone) as agent_phone,
            IFNULL((SELECT email FROM agents WHERE agents.agent_id = entegral_api_data.agent_id), agent_email) as agent_email,
            CONCAT(location_lat, ",", location_long) as directions,
            bathrooms,
            bedrooms,
            living_areas as family_room,
            separate_toilet,
            covered_parking as carport,
            garages,
            pool,
            additional_charges,
            security_tag,
            staff_tag,
            study_tag,
            carpeted_tag,
            open_parking as parking,
            video_url,
            property_type as mkt_type,
            furnished,
            CASE WHEN map_location_available = 1 THEN "Y" ELSE "N" END as google_map,
            image_size as total_image_file_size_kb,
            headline as property_overview_detail,
            DATE(mandate_startdate) as listing_date,
            DATEDIFF(CURDATE(), DATE(mandate_startdate)) as age_of_listing_days,
            CONCAT(street_number, "-", street_name, "-", complex_name) as full_address,
            suburb,
            town,
            province,
            CASE WHEN mandate_saletype = "for sale" THEN "Sale" ELSE "Rent" END as rent_sale
        ')->get();


        foreach ($data as $key => $value) {
            $value->furnished = $value->furnished === "Y" ? "Yes" : "No";
            $value->directions = $value->directions && $value->directions != ',' ? $value->directions : null;

            $hasAddressParts = ($value->street_name || $value->street_number || $value->town) && $value->province;
            $value->google_map = $value->directions || $hasAddressParts ? "Y" : "N";
        }



        return $data;
    }
}
