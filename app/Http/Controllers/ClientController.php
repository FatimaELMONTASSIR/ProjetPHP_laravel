<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Client;


class ClientController extends Controller
{
    public function Liste_client(){
        $clients=Client::all();
        return view('client.liste',compact('clients'));
    }
    public function Ajouter_client(){
        return view('client.ajouter');
    }
    public function Ajouter_client_traitement(Request $request){
       $request->validate([
        'nom' =>'required',
        'prenom' =>'required',
        'equipe' =>'required'
       ]);
       $client = new Client();
       $client->nom = $request->nom;
       $client->prenom = $request->prenom;
       $client->equipe = $request->equipe;
       $client->save();
       return redirect('/ajouter')->with('status','Client ajouté avec succès');
    }
    public function update_client($id){
        $clients=Client::find($id);
        return view('client.update',compact('clients'));
    }
    public function update_client_traitement(Request $request){
        $request->validate([
        'nom' =>'required',
        'prenom' =>'required',
        'equipe' =>'required'
       ]);
       $client=Client::find($request->id);
       $client->nom=$request->nom;
       $client->prenom=$request->prenom;
       $client->equipe=$request->equipe;
       $client->update();
       return redirect('/Liste')->with('status','Client modifié avec succès');
}
public function delete_client($id){
    $client=Client::find($id);
    $client->delete();
    return redirect('/Liste')->with('status','Client supprimé avec succès');
}

}