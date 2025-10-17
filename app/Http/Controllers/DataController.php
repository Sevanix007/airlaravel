<?php

namespace App\Http\Controllers;
//paginacijasi
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;


use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Roles;
use App\Models\Lidmasina;
use App\Models\Lidosta;
use App\Models\Darbinieki; 
use App\Models\Lidojums;


class DataController extends Controller
{
    

//
//
//
//SHOW -------------------------------
//
//
//

    public function showAllData() {
        $data = new Data();
        // dd($data->all());
        // return view('allData', ['data'=>$data->orderBy('id','asc')->get()]);
        //  return view('allData', ['data'=>DB::table('data_temp')->paginate(2)]);
        return view('allData', ['data' => DB::table('data_temp')->paginate(5)]);
    
    }

        public function showAllRoles()
    {
        $roles = Roles::orderBy('RoleID', 'asc')->get();
        // return view('allRoles', ['roles' => $roles]);
        return view('allRoles', ['roles' => DB::table('Roles')->orderBy('RoleID', 'asc')->paginate(5)]);
    }



        public function showAllLidmasinas() {
        $lidmasina = new Lidmasina();
        return view('allLidmasinas', ['lidmasina' => DB::table('Lidmasina')->paginate(5)]);
    
    }


            public function showAllLidostas() {
        $lidosta = new Lidosta();
        return view('allLidostas', ['lidosta' => DB::table('Lidosta')->paginate(5)]);
    
    }

public function showAllDarbinieki() {
       // $darbinieki = new Darbinieki();
        //return view('allDarbinieki', ['darbinieki' => DB::table('Darbinieki')->paginate(5)]);

        // $darbinieki = new Darbinieki();
        $darbinieki = Darbinieki::with('roles')->orderBy('id', 'asc')->paginate(9);
        //Darbinieki Sozdayotsa
        return view('allDarbinieki', ['darbinieki' => $darbinieki]);

    
    }


    public function showAllLidojumi() {
        $lidojums = Lidojums::with('darbinieki', 'lidostas', 'lidmasinas')->orderBy('LidojumaID', 'asc')->paginate(5);
        return view('allLidojums', ['lidojums' => $lidojums]);
    
    }


//
//
//
//DETAILS -------------------------------
//
//
//

public function details($id) {                                                        
    $dati = new Data;                                                        
    return view('details', ['data'=>$dati->find($id)]);                                                        
}                                                        
                                                        
                                                        
public function details_r($id) {                                                        
    $roles = new Roles;                                                        
    return view('detailsRoles', ['roles'=>$roles->find($id)]);                                                        
}      


public function details_l($id) {                                                        
    $lidmasina = new Lidmasina;                                                        
    return view('detailsLidmasina', ['lidmasina'=>$lidmasina->find($id)]);                                                        
}      

public function details_lo($id) {                                                        
    $lidosta = new Lidosta;                                                        
    return view('detailsLidosta', ['lidosta'=>$lidosta->find($id)]);                                                        
}      


public function details_dr($id) {     
    $dd = "ddddd";                                                   
    $darbinieki = new Darbinieki;                                                     
    return view('detailsDarbinieki', ['darbinieki'=>$darbinieki->find($id)]);                                                        
}      





//
//
//
//CREATE -------------------------------
//
//
//


//jauna ieraksta pievienosana                                                        
public function newSubmit(Request $dati) {                                                        
    // return "Viss labi!";                                                        
  // return dd($dati->all());                                                        
    //  return ($dati->input('subject'));   
    $validation = $dati->validate([
        'name' => 'required|min:3|max:20',
        'email' => 'required|email|max:20',
        'subject' => 'required|min:3|max:20',
        'message' => 'required|min:3|max:1024'
    ])  ;    
    
    $data = new Data;
    $data->name = $dati->input('name');
        
    $data->email = $dati->input('email');
    $data->subject = $dati->input('subject');
    $data->message = $dati->input('message');
    $data->save();
      return redirect()->to('/data/allData')->with('successp', 'Veiksmīgi bija izveidots jauns ieraksts');
}                                                        
                                                        
          

public function newRole(Request $dati) {                                                        
    // return "Viss labi!";                                                        
  // return dd($dati->all());                                                        
    //  return ($dati->input('subject'));   
    $validation = $dati->validate([
        'RoleName' => 'required|min:2|max:20',
    ])  ;    
              $roles = new Roles;
    $roles->RoleName = $dati->input('RoleName');
        

    $roles->save();
    // return redirect('/contacts')->with('succes','Veismigi izdarits');
      return redirect()->to('/data/allRoles')->with('success', 'Veiksmīgi bija pievienota jauna loma');                                              
                      
    
}    



public function newLidmasina(Request $dati) {                                                        
    $validation = $dati->validate([
        'RegNumurs' => 'required|min:2|max:20',
         'LidmasinasModelis' => 'required|min:2|max:20',
            'LidmasinasVietuSkaits' => 'required|integer',
    ])  ;    
              $lidmasina = new Lidmasina;
    $lidmasina->RegNumurs = $dati->input('RegNumurs');
    $lidmasina->LidmasinasModelis = $dati->input('LidmasinasModelis');
    $lidmasina->LidmasinasVietuSkaits = $dati->input('LidmasinasVietuSkaits');
    $lidmasina->save();
    return redirect()->to('/data/Lidmasinas')->with('successp', 'Veiksmīgi bija pievienota jauna lidmasina'); 
    
    $roles->save();
                                                 
}    


public function newLidosta(Request $dati) {                                                        
    $validation = $dati->validate([
        'LidostasNosaukums' => 'required|min:2|max:50',
        'LidostasKods' => 'required|min:3|max:10',
        'Valsts' => 'required|min:2|max:30',
        'Pilseta' => 'required|min:2|max:30',
    ]);    

    $lidosta = new Lidosta;
    $lidosta->LidostasNosaukums = $dati->input('LidostasNosaukums');
    $lidosta->LidostasKods = $dati->input('LidostasKods');
    $lidosta->Valsts = $dati->input('Valsts');
    $lidosta->Pilseta = $dati->input('Pilseta');
    $lidosta->save();

    return redirect()->to('/data/Lidostas')->with('successp', 'Veiksmīgi bija pievienota jauna lidosta'); 
}


public function newDarbinieks(Request $dati) {
    $validation = $dati->validate([
        'Vards' => 'required|min:2|max:20',
        'Uzvards' => 'required|min:2|max:20',
        'EMAIL' => 'required|email|max:30',
        'Login_name' => 'required|min:2|max:20|unique:Darbinieki,Login_name',
        'Pass' => 'required|min:2|max:20',
        'RoleID' => 'nullable|integer',
    ]);

    $darbinieks = new Darbinieki;
    $darbinieks->Vards = $dati->input('Vards');
    $darbinieks->Uzvards = $dati->input('Uzvards');
    $darbinieks->EMAIL = $dati->input('EMAIL');
    $darbinieks->Login_name = $dati->input('Login_name');
    $darbinieks->Pass = $dati->input('Pass');
    $darbinieks->RoleID = $dati->input('RoleID');
    $darbinieks->save();

    return redirect()->to('/data/Darbinieki')->with('successp', 'Veiksmīgi bija pievienots jauns darbinieks');
}



public function newLidojums(Request $dati) {
    $validation = $dati->validate([
        'LidojumaNumurs' => 'required|min:2|max:20|unique:Lidojums,LidojumaNumurs',
        'IzlidesLidosta' => 'required|min:2|max:50',
        'IelidesLidosta' => 'required|min:2|max:50',
        'IzlidesLaiks' => 'required',
        'IelidesLaiks' => 'required|after:IzlidesLaiks',
        'LidmasinasID' => 'required|integer',
        'Pilots1' => 'required|integer',
        'Pilots2' => 'nullable|integer',
        'Darbinieks1' => 'required|integer',
        'Darbinieks2' => 'nullable|integer',

    ]);

    $lidojums = new Lidojums;
    $lidojums->LidojumaNumurs = $dati->input('LidojumaNumurs');
    $lidojums->IzlidesLidosta = $dati->input('IzlidesLidosta');
    $lidojums->IelidesLidosta = $dati->input('IelidesLidosta');
    $lidojums->IzlidesLaiks = $dati->input('IzlidesLaiks');
    $lidojums->IelidesLaiks = $dati->input('IelidesLaiks');
    $lidojums->LidmasinasID = $dati->input('LidmasinasID');
    $lidojums->Pilots1= $dati->input('Pilots1');
    $lidojums->Pilots2 = $dati->input('Pilots2');
    $lidojums->Darbinieks1 = $dati->input('Darbinieks1');
    $lidojums->Darbinieks2 = $dati->input('Darbinieks2');

    $lidojums->save();

    return redirect()->to('/data/Lidojums')->with('successp', 'Veiksmīgi bija pievienots jauns lidojums');
}

//
//
//
//EDIT -------------------------------
//
//
//




public function editRoles($id) {
    //Data::find($id);
    $roles = new Roles;
    return view('editroles', ['roles'=>$roles->find($id)]);

}

public function editRolesSubmit(Request $dati, $id)
{

        $validation = $dati->validate([
        'RoleName' => 'required|min:2|max:20',
    ])  ;    
    
    $roles = Roles::find($id);
    $roles->RoleName = $dati->input('RoleName');
    $roles->save();

    return redirect()->to('/data/allRoles')->with('success', 'Veiksmīgi bija redigēts');

}




public function edit($id) {
    //Data::find($id);
    // return redirect()->to('/data/allData')->with('success', 'Ieraksts bija izdzests');
    // return $id;
    $data = new Data;
    return view('edit', ['data'=>$data->find($id)]);

}


public function editSubmit(Request $dati, $id)
{

        $validation = $dati->validate([
        'name' => 'required|min:3|max:20',
        'email' => 'required|email|max:20',
        'subject' => 'required|min:3|max:20',
        'message' => 'required|min:3|max:1024'
    ])  ;    
    
    $data = Data::find($id);
    $data->name = $dati->input('name');
        $data->email = $dati->input('email');
    $data->subject = $dati->input('subject');
    $data->message = $dati->input('message');
    $data->save();
   // return view('details', ['data'=>$data->find($id)]) ->with('successp', 'Ieraksts bija Redigēts');       
    return redirect()->to('/data/allData')->with('successp', 'Veiksmīgi bija regidēts '); 


}



public function editLidmasina($id) {
    $lidmasina = new Lidmasina;
    return view('editlidmasina', ['lidmasina'=>$lidmasina->find($id)]);
}


public function editLidmasinasSubmit(Request $dati, $id)
{
        $validation = $dati->validate([
                'RegNumurs' => 'required|min:2|max:20',
         'LidmasinasModelis' => 'required|min:2|max:20',
            'LidmasinasVietuSkaits' => 'required|integer',
    ])  ;    
    
    $lidmasina = Lidmasina::find($id);
    $lidmasina->RegNumurs = $dati->input('RegNumurs');
    $lidmasina->LidmasinasModelis = $dati->input('LidmasinasModelis');
    $lidmasina->LidmasinasVietuSkaits = $dati->input('LidmasinasVietuSkaits');
    $lidmasina->save();

    return redirect()->to('/data/Lidmasinas')->with('successp', 'Veiksmīgi bija redigēts');

}

public function editLidosta($id) {
    $lidosta = new Lidosta;
    return view('editlidosta', ['lidosta'=>$lidosta->find($id)]);

}



public function editLidostaSubmit(Request $dati, $id)
{
        $validation = $dati->validate([
                'LidostasNosaukums' => 'required|min:2|max:50',
        'LidostasKods' => 'required|min:3|max:10',
        'Valsts' => 'required|min:2|max:30',
        'Pilseta' => 'required|min:2|max:30',   
    ])  ;    
    
    $lidosta = Lidosta::find($id);
    $lidosta->LidostasNosaukums = $dati->input('LidostasNosaukums');
    $lidosta->LidostasKods = $dati->input('LidostasKods');
    $lidosta->Valsts = $dati->input('Valsts');
    $lidosta->Pilseta = $dati->input('Pilseta');
    $lidosta->save();

    return redirect()->to('/data/Lidostas')->with('successp', 'Veiksmīgi bija redigēts');

}


public function editDarbinieki($id) {
    $darbinieki = new Darbinieki;
    return view('editdarbinieki', ['darbinieki'=>$darbinieki->find($id)]);
}


public function editDarbiniekiSubmit(Request $dati, $id)
{

        $validation = $dati->validate([
        'Vards' => 'required|min:2|max:20',
        'Uzvards' => 'required|min:2|max:20',
        'EMAIL' => 'required|email|max:30',
        'Login_name' => 'required|min:2|max:20',
        'Pass' => 'required|min:2|max:20',
        'RoleID' => 'nullable|integer',
    ])  ;
    
    $darbinieks = Darbinieki::find($id);
    $darbinieks->Vards = $dati->input('Vards');
    $darbinieks->Uzvards = $dati->input('Uzvards');
    $darbinieks->EMAIL = $dati->input('EMAIL');
    $darbinieks->Login_name = $dati->input('Login_name');
    $darbinieks->Pass = $dati->input('Pass');
    $darbinieks->RoleID = $dati->input('RoleID');
    $darbinieks->save();
    return redirect()->to('/data/Darbinieki')->with('successp', 'Veiksmīgi bija redigēts');

}

//
//
//
//DELETE -------------------------------
//
//
//



public function delete($id) {

    Data::find($id)->delete();
    return redirect()->to('/data/allData')->with('success', 'Ieraksts bija izdzests');

}


public function deleteR($id) {

    Roles::find($id)->delete();                                                        
    return redirect()->to('/data/allRoles')->with('success1', 'Ieraksts bija izdzests');                                                        
                                                        
}  


public function deleteL($id) {

    Lidmasina::find($id)->delete();                                                        
    return redirect()->to('/data/Lidmasinas')->with('success1', 'Ieraksts bija izdzests');                                                        
                                                        
}                                                        
         
 
public function deleteLo($id) {

    Lidosta::find($id)->delete();                                                        
    return redirect()->to('/data/Lidostas')->with('success1', 'Ieraksts bija izdzests');                                                        
                                                        
}     


public function deleteD($id) {

    Darbinieki::find($id)->delete();                                                        
    return redirect()->to('/data/Darbinieki')->with('success1', 'Ieraksts bija izdzests');                                                        
                                                        
}     

public function deleteLi($id) {

    Lidojums::find($id)->delete();                                                        
    return redirect()->to('/data/Lidojums')->with('success1', 'Ieraksts bija izdzests');                                                        
                                                        
}     
     

// func 


// public function index()
// {
//     $darbinieki = Roles::with(['darbinieki'])->get();
//     return view('allDarbinieki', compact('darbinieki'));
// }

}