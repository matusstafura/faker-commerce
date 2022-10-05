<?php

namespace FakerCommerce\Data;

class Category extends Data
{
    protected static array $category =
        [
            "3D Printers & Supplies", "Accessories", "Action Figures", "Adhesives, Sealants & Tapes", "Advertising",
            "Agriculture & Forestry", "Animals", "Animation Art & Characters", "Antiquarian & Collectible",
            "Arcade, Jukeboxes & Pinball", "Audiobooks", "Autographs", "Automation, Motors & Drives",
            "Automotive Tools & Supplies", "Baby & Toddler Clothing", "Backyard Poultry Supplies",
            "Banks, Registers & Vending", "Barware", "Bath", "Beads", "Beanbag Plush", "Bedding", "Bird Supplies",
            "Boats", "Bottles & Insulators", "Boxing, Martial Arts & MMA", "Breweriana, Beer",
            "Building Materials & Supplies", "Building Toys", "Cars & Trucks", "Casino", "Cat Supplies",
            "Catalogs", "Children & Young Adults", "Classic Toys", "Cleaning & Janitorial Supplies", "Clocks",
            "Clothing & Shoe Care", "CNC, Metalworking & Manufacturing", "Collectible Card Games", "Comics",
            "Computer Cables & Connectors", "Computer Components & Parts", "Construction", "Cookbooks",
            "Costumes, Reenactment, Theater", "Credit, Charge Cards", "Cultures & Ethnicities", "Cycling",
            "Dancewear", "Decorative Collectibles", "Desktops & All-In-Ones", "Diecast & Toy Vehicles",
            "Dog Supplies", "Drives, Storage & Blank Media", "Educational", "Electrical Equipment & Supplies",
            "Electronic, Battery & Wind-Up", "Enterprise Networking, Servers", "Facility Maintenance & Safety",
            "Fantasy, Mythical & Magic", "Fast Food & Cereal Premiums", "Fasteners & Hardware", "Fiction & Literature",
            "Fish & Aquariums", "Fishing", "Fitness, Running & Yoga", "Food & Beverages", "Fuel & Energy", "Furniture",
            "Gadgets & Other Electronics", "Games", "Golf", "Greeting Cards & Party Supply", "Healthcare & Dental",
            "Heavy Equipment, Parts & Attachments", "Historical Memorabilia", "Holiday & Seasonal",
            "Holiday & Seasonal Décor", "Home Automation", "Home Décor", "Home Improvement",
            "Home Networking & Connectivity", "Home Telephones & Accessories", "Horse Supplies",
            "Household Supplies & Cleaning", "Hunting", "HVAC", "Hydraulics, Pneumatics, Pumps & Plumbing",
            "Indoor Games", "Keyboards, Mice & Pointers", "Kids & Teens at Home", "Kids' Clothing, Shoes & Accs",
            "Kitchen & Home", "Kitchen, Dining & Bar", "Knives, Swords & Blades", "Lamps, Lighting",
            "Lamps, Lighting & Ceiling Fans", "Laptop & Desktop Accessories", "Laptops & Netbooks",
            "Light Equipment & Tools", "Linens & Textiles (1930-Now)", "Magazine Back Issues", "Major Appliances",
            "Manuals & Resources", "Marbles", "Material Handling", "Men's Accessories", "Men's Clothing",
            "Men's Shoes", "Metalware", "Militaria", "Model Railroads & Trains", "Models & Kits",
            "Monitors, Projectors & Accs", "Motorcycles", "Multipurpose Batteries & Power", "Non-Sport Trading Cards",
            "Nonfiction", "Office", "Other Books", "Other Business & Industrial",
            "Other Clothing, Shoes & Accessories", "Other Computers & Networking", "Other Consumer Electronics",
            "Other Home & Garden", "Other Pet Supplies", "Other Sporting Goods", "Other Vehicles & Trailers",
            "Outdoor Sports", "Outdoor Toys & Structures", "Paper", "Parts & Accessories",
            "Pens & Writing Instruments", "Pet Memorials & Urns", "Pez, Keychains, Promo Glasses", "Phone Cards",
            "Photographic Images", "Pinbacks, Bobbles, Lunchboxes", "Portable Audio & Headphones", "Postcards",
            "Power Protection, Distribution", "Powersports", "Preschool Toys & Pretend Play",
            "Printers, Scanners & Supplies", "Printing & Graphic Arts", "Puzzles", "Radio Communication",
            "Radio Control & Control Line", "Radio, Phonograph, TV, Phone", "Religion & Spirituality",
            "Reptile Supplies", "Restaurant & Food Service", "Retail & Services", "Robots, Monsters & Space Toys",
            "Rocks, Fossils & Minerals", "Rugs & Carpets", "Science & Medicine (1930-Now)", "Science Fiction & Horror",
            "Sewing (1930-Now)", "Slot Cars", "Small Animal Supplies", "Smart Glasses", "Software",
            "Souvenirs & Travel Memorabilia", "Stuffed Animals", "Surveillance & Smart Home Electronics",
            "Tablet & eBook Reader Accs", "Tablet & eBook Reader Parts", "Tablets & eBook Readers", "Team Sports",
            "Tennis & Racquet Sports", "Test, Measurement & Inspection", "Textbooks, Education", "Tobacciana",
            "Tools & Workshop Equipment", "Tools, Hardware & Locks", "Toy Soldiers", "Transportation",
            "TV & Movie Character Toys", "TV, Video & Home Audio", "Uniforms & Work Clothing",
            "Unisex Clothing, Shoes & Accs", "Vanity, Perfume & Shaving", "Vehicle Electronics & GPS", "Vintage",
            "Vintage & Antique Toys", "Vintage Computing", "Vintage Electronics", "Vintage, Retro, Mid-Century",
            "Virtual Reality", "Water Sports", "Websites & Businesses for Sale", "Wedding & Formal Occasion",
            "Wedding Supplies", "Wholesale & Bulk Lots", "Wholesale Lots", "Wholesale, Large & Small Lots",
            "Window Treatments & Hardware", "Winter Sports", "Women's Accessories", "Women's Bags & Handbags",
            "Women's Clothing", "Women's Shoes", "World & Traditional Clothing", "Yard, Garden & Outdoor Living",
        ];

    public function category(): string
    {
        return self::randomize(self::$category);
    }

    public function breadcrumbs(int $subcategories = 1, string $separator = "/"): string
    {
        $breadcrumb = "";
        for ($i = 0; $i < $subcategories; $i++) {
            $breadcrumb .= $this->category();
            if ($i+1 != $subcategories) {
                $breadcrumb .= $separator;
            }
        }
        return $breadcrumb;

    }
}