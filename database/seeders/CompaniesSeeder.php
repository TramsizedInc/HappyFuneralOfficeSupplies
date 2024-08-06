<?php

namespace Database\Seeders;

use App\Models\companies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        companies::factory()->create([
            'name' => 'Aevum Internet Temetkezés Kft.',
                'tax_number' => '23414985-2-43',
                'office' => 'Dembinszky',
                'address' => '1071 Budapest, Dembinszky utca 44.',
                'email' => 'dembinszky@aevum.hu',
                'phone' => '+36 1 919 0130',
                'mobile' => '+36 30 229 5279',
        ]);  
        companies::factory()->create([
            'name' => 'Aevum Internet Temetkezés Kft.',
                'tax_number' => '23414985-2-43',
                'office' => 'Pap Károly',
                'address' => '1139 Budapest, Pap Károly utca 12.',
                'email' => 'papkarolyutca@aevum.hu',
                'phone' => '+36 1 919 0132',
                'mobile' => '+36 30 253 5258',
        ]);  
        companies::factory()->create([
            'name' => 'Aevum Internet Temetkezés Kft.',
                'tax_number' => '23414985-2-43',
                'office' => 'Bécsi út',
                'address' => '1034 Budapest, Bécsi út 141-143.',
                'email' => 'becsiut@aevum.hu',
                'phone' => '+36 1 919 0133',
                'mobile' => '+36 30 576 7216',
        ]);  
        companies::factory()->create([
            'name' => 'Aevum Internet Temetkezés Kft.',
                'tax_number' => '23414985-2-43',
                'office' => 'Árpád út',
                'address' => '1042 Budapest, Árpád út 88.',
                'email' => 'arpadut@aevum.hu',
                'phone' => '+36 1 919 0131',
                'mobile' => '+36 30 664 5758',
        ]); 
        companies::factory()->create([
           'name' => 'Szomorúfűz Temetkezési Hálózat Kft.',
                'tax_number' => '26704450-2-42',
                'office' => 'Izabella',
                'address' => '1064 Budapest, Izabella u. 65.',
                'email' => 'budapest@temetkezes.hu',
                'phone' => '+36 1 919 0170',
                'mobile' => '+36 30 847 1915',
        ]); 
        companies::factory()->create([
            'name' => 'Szomorúfűz Temetkezési Hálózat Kft.',
                'tax_number' => '26704450-2-42',
                'office' => 'Pesti út',
                'address' => '1173 Budapest, Pesti út 41/A.',
                'email' => 'pesti@temetkezes.hu',
                'phone' => '+36 1 919 0171',
                'mobile' => '+36 30 313 7920',
        ]);  
        companies::factory()->create([
            'name' => 'Szomorúfűz Temetkezési Hálózat Kft.',
                'tax_number' => '26704450-2-42',
                'office' => 'Nagyenyed',
                'address' => '1123 Budapest, Nagyenyed utca 1.',
                'email' => 'nagyenyed@temetkezes.hu',
                'phone' => '+36 1 919 0886',
                'mobile' => '+36 30 203 2300',
        ]);  
        companies::factory()->create([
            'name' => 'Szomorúfűz Temetkezési Hálózat Kft.',
                'tax_number' => '26704450-2-42',
                'office' => 'Thököly',
                'address' => '1146 Budapest, Thököly út 167.',
                'email' => 'thokoly@temetkezes.hu',
                'phone' => '+36 1 919 0172',
                'mobile' => '+36 30 965 1783',
        ]);  
        companies::factory()->create([
            'name' => 'Szomorúfűz Temetkezési Hálózat Kft.',
                'tax_number' => '26704450-2-42',
                'office' => 'Szivacs',
                'address' => '1204 Budapest, Szivacs utca 5.',
                'email' => 'szivacs@temetkezes.hu',
                'phone' => '',
                'mobile' => '+36 30 576 7206',
        ]);  
        companies::factory()->create([
            'name' => 'Gyászhuszár Kegyeleti Kft.',
                'tax_number' => '24280237-2-43',
                'office' => 'Lenhossék',
                'address' => '1096 Budapest, Lenhossék utca 33.',
                'email' => 'lenhossek@gyaszhuszar.hu',
                'phone' => '+36 1 919 0021',
                'mobile' => '+36 30 633 5677',
        ]);  
        companies::factory()->create([
            'name' => 'Gyászhuszár Kegyeleti Kft.',
                'tax_number' => '24280237-2-43',
                'office' => 'Villányi',
                'address' => '1114 Budapest, Villányi út 6.',
                'email' => 'villanyi@gyaszhuszar.hu',
                'phone' => '+36 1 919 0020',
                'mobile' => '+36 30 879 8970',
        ]);  
        companies::factory()->create([
            'name' => 'Lélekhajó Szolgáltató Kft.',
                'tax_number' => '23434464-2-43',
                'office' => 'Lélekhajó',
                'address' => '1096 Budapest, Ernő utca 30-34. fszt. 1.',
                'email' => 'info@lelekhajotemetkezes.hu',
                'phone' => '+36 1 919 0165',
                'mobile' => '+36 20 586 8800',
        ]);  
        companies::factory()->create([
            'name' => 'Menefrisz Kegyeleti Szolgáltató Kft.',
                'tax_number' => '26132790-2-42',
                'office' => 'Menefrisz',
                'address' => '1156 Budapest, Kontyfa utca 8.',
                'email' => 'info@menefrisztemetkezes.hu',
                'phone' => '',
                'mobile' => '+36 30 780 4804',
                
        ]);  
    }
}
