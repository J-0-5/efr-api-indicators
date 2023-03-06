<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MetricSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert(DB::raw("
        INSERT INTO `metrics` (`id`, `associate_to`, `reference`, `source`, `description`, `unit`, `frequency`, `created_at`, `updated_at`) VALUES
        (1, 'monthly_metrics', 'bts_truck_d11', 'BTS', 'Truck Tonnage Index)', 'Index', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (2, 'monthly_metrics', 'bts_vmt', 'BTS', 'Vehicle Miles Traveled', 'Miles', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (3, 'monthly_metrics', 'bts_vmt_d11', 'BTS', 'Seasonally-Adjusted Vehicle Miles Traveled', 'Miles', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (4, 'monthly_metrics', 'bts_tsi_freight', 'BTS', 'Transportation Services Freight Index', 'Index', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (5, 'monthly_metrics', 'bts_manuf', 'BTS', 'Index of the Value of Manufacturers\' Shipments', 'Index', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (6, 'monthly_metrics', 'bts_inv_to_sales', 'BTS', 'Retailers\' Inventories to Sales Ratio', 'ItS Ratio', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (7, 'monthly_metrics', 'fred_ppi_gftld', 'FRED', 'Producer Price Index (PPI) General Freight Trucking, Long-Distance Truckload: Primary Services', 'Index', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (8, 'monthly_metrics', 'fred_ppi_sftld', 'FRED', 'Producer Price Index (PPI) Specialized Freight Trucking, Long-Distance: Primary Services', 'Index', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (9, 'monthly_metrics', 'fred_ppi_fdfg', 'FRED', 'Producer Price Index (PPI) by Commodity: Final Demand: Finished Goods', 'Index', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (10, 'monthly_metrics', 'fred_ppi_ids4', 'FRED', 'Producer Price Index (PPI) by Commodity: Intermediate Demand by Production Flow: Inputs to Stage 4 Goods Producers', 'Index', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (11, 'monthly_metrics', 'fred_ppi_ids3', 'FRED', 'Producer Price Index (PPI) by Commodity: Intermediate Demand by Production Flow: Inputs to Stage 3 Goods Producers', 'Index', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (12, 'monthly_metrics', 'fred_ett_sa', 'FRED', 'Estimated number of employment in truck transportation – Seasonally adjusted', 'Thousands of Persons', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (13, 'monthly_metrics', 'fred_ett_nsa', 'FRED', 'Estimated number of employment in truck transportation – Not seasonally adjusted', 'Thousands of Persons', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (14, 'monthly_metrics', 'fred_etw_nsa', 'FRED', 'Employees in transportation and warehousing – Not seasonally adjusted', 'Thousands of Persons', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (15, 'monthly_metrics', 'fred_etw_sa', 'FRED', 'Employees in transportation and warehousing – Seasonally adjusted', 'Thousands of Persons', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (16, 'monthly_metrics', 'bls_NonFarmEmployment', 'BLS', 'Total number of employees in nonagricultural industries', 'Thousands of persons', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (17, 'monthly_metrics', 'bea_WagesAndSalaries', 'BEA', 'Wages and salaries', 'Current USD dollars', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (18, 'monthly_metrics', 'bea_PrivateIndustries', 'BEA', 'Wages and salaries by Private Industries', 'Current USD dollars', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (19, 'monthly_metrics', 'bea_Goods-ProducingIndustries', 'BEA', 'Wages and salaries by Goods-Producing Industries', 'Current USD dollars', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (20, 'monthly_metrics', 'bea_Manufacturing', 'BEA', 'Wages and salaries by Manufacturing', 'Current USD dollars', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (21, 'monthly_metrics', 'bea_Services-ProducingIndustries', 'BEA', 'Wages and salaries by Services-Producing Industries', 'Current USD dollars', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (22, 'monthly_metrics', 'bea_TradeTransportationAndUtilities', 'BEA', 'Wages and salaries by Trade, transportation and utilities', 'Current USD dollars', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (23, 'monthly_metrics', 'bea_OtherServices-ProducingIndustries', 'BEA', 'Wages and salaries by Other Services-Producing Industries', 'Current USD dollars', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (24, 'monthly_metrics', 'bea_Government', 'BEA', 'Wages and salaries by Government', 'Current USD dollars', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (25, 'annual_metrics', 'bea_WagesSalariesTT', 'BEA', 'Wages and salaries by state: Truck Transportation ', 'Thousands of dollars', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (26, 'annual_metrics', 'bea_GDPTT', 'BEA', 'Real GDP by State: Truck Transportation', 'Millions of current dollars', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (27, 'annual_metrics', 'bea_TaxesTT', 'BEA', 'Taxes on Production and imports less subsides by state: Truck Transportation', 'Thousands of dollars', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (28, 'annual_metrics', 'usda_tons_FruitAndVegetables', 'USDA', 'Truck movement', 'Tons ', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (29, 'annual_metrics', 'usda_tons_Grains', 'USDA', 'Truck movement', 'Tons ', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (30, 'annual_metrics', 'usda_tons_Livestock', 'USDA', 'Truck movement', 'Tons ', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (31, 'annual_metrics', 'usda_tons_Meat', 'USDA', 'Truck movement', 'Tons ', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (32, 'annual_metrics', 'usda_tons_Milk', 'USDA', 'Truck movement', 'Tons ', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (33, 'annual_metrics', 'usda_tons_Poultry', 'USDA', 'Truck movement', 'Tons ', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (34, 'annual_metrics', 'usda_tons_Total', 'USDA', 'Truck movement', 'Tons ', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (35, 'annual_metrics', 'usda_value_FruitAndVegetables', 'USDA', 'Truck movement', 'Dollars', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (36, 'annual_metrics', 'usda_value_Grains', 'USDA', 'Truck movement', 'Dollars', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (37, 'annual_metrics', 'usda_value_Livestock', 'USDA', 'Truck movement', 'Dollars', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (38, 'annual_metrics', 'usda_value_Meat', 'USDA', 'Truck movement', 'Dollars', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (39, 'annual_metrics', 'usda_value_Milk', 'USDA', 'Truck movement', 'Dollars', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (40, 'annual_metrics', 'usda_value_Poultry', 'USDA', 'Truck movement', 'Dollars', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (41, 'annual_metrics', 'usda_value_Total', 'USDA', 'Truck movement', 'Dollars', 'annual', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (42, 'weekly_metrics', 'eia_diesel_RockyMountain', 'EIA', 'Diesel price', '$/gal', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (43, 'weekly_metrics', 'eia_diesel_U.S.', 'EIA', 'Diesel price', '$/gal', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (44, 'weekly_metrics', 'eia_diesel_EastCoast', 'EIA', 'Diesel price', '$/gal', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (45, 'weekly_metrics', 'eia_diesel_Midwest', 'EIA', 'Diesel price', '$/gal', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (46, 'weekly_metrics', 'eia_diesel_GulfCoast', 'EIA', 'Diesel price', '$/gal', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (47, 'weekly_metrics', 'eia_diesel_WestCoast', 'EIA', 'Diesel price', '$/gal', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (48, 'weekly_metrics', 'eia_gasoline_Midwest', 'EIA', 'Regular gasoline price', '$/gal', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (49, 'weekly_metrics', 'eia_gasoline_U.S.', 'EIA', 'Regular gasoline price', '$/gal', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (50, 'weekly_metrics', 'eia_gasoline_EastCoast', 'EIA', 'Regular gasoline price', '$/gal', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (51, 'weekly_metrics', 'eia_gasoline_RockyMountain', 'EIA', 'Regular gasoline price', '$/gal', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (52, 'weekly_metrics', 'eia_gasoline_GulfCoast', 'EIA', 'Regular gasoline price', '$/gal', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (53, 'weekly_metrics', 'eia_gasoline_WestCoast', 'EIA', 'Regular gasoline price', '$/gal', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (54, 'weekly_metrics', 'usda_gtci_truck', 'USDA', 'Cost indices of transporting grain by truck', 'Index', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (55, 'weekly_metrics', 'usda_gtci_unit_train', 'USDA', 'Cost indices of transporting grain by unit train', 'Index', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (56, 'weekly_metrics', 'usda_gtci_shuttle_train', 'USDA', 'Cost indices of transporting grain by shuttle train', 'Index', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (57, 'weekly_metrics', 'usda_gtci_barge', 'USDA', 'Cost indices of transporting grain by barge', 'Index', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (58, 'weekly_metrics', 'usda_gtci_gulf_vessel', 'USDA', 'Cost indices of transporting grain by gulf vessel', 'Index', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (59, 'weekly_metrics', 'usda_gtci_pacific_vessel', 'USDA', 'Cost indices of transporting grain by pacific vessel', 'Index', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (60, 'usda_grain_price', 'usda_gp_market_id', 'USDA', 'Market Name', 'Category', '', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (61, 'usda_grain_price', 'usda_gp_market_type', 'USDA', 'Market Type', 'Category', '', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (62, 'usda_grain_price', 'usda_gp_commodity', 'USDA', 'Commodity', 'Category', '', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (63, 'usda_grain_price', 'usda_gp_bid', 'USDA', 'Grain prices per state ', 'Dollar per bushel', 'weekly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (64, 'census', 'census_category_code', 'CENSUS', 'Industry list', 'Category', '', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (65, 'census', 'census_data_type_code', 'CENSUS', 'Item type', 'Category', '', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (66, 'census', 'census_seasonally_adj_Yes', 'CENSUS', 'Sales, inventories of retail trade and food services – Seasonally adjusted', 'Total, percentage of change', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52'),
        (67, 'census', 'census_seasonally_adj_No', 'CENSUS', 'Sales, inventories of retail trade and food services – Not seasonally adjusted', 'Total, percentage of change', 'monthly', '2023-03-06 21:41:52', '2023-03-06 21:41:52');
        "));
    }
}
