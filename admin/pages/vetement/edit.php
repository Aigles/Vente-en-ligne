<div>
    <ul class="breadcrumb">
       <li>
           <a href="#">Tableau de bord</a>
       </li>
       <li>
           <a href="#">Modifier un Vetement</a>
       </li>
    </ul>
</div>

<div class="row">
    <div class="box col-md-12">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Mise a jour d' un vetement</h2>

                <div class="box-icon">
                    <a href="#" class="btn btn-setting btn-round btn-default"><i
                            class="glyphicon glyphicon-cog"></i></a>
                    <a href="#" class="btn btn-minimize btn-round btn-default"><i
                            class="glyphicon glyphicon-chevron-up"></i></a>
                    <a href="#" class="btn btn-close btn-round btn-default"><i
                            class="glyphicon glyphicon-remove"></i></a>
                </div>
            </div>
            <div class="box-content" id="save_vetement">
                <form role="form">
                    <div class="row">
                        <div class="box col-md-6">  
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nom Vetement</label>
                                <input type="text" class="form-control " required id="nom-poduit" placeholder="Entrer le nom d'un Vetement">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Code Vetement</label>
                                <input type="number" class="form-control required" required id="nb-vendu" placeholder="Code Vetement">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Description</label>
                                <textarea type="number" class="form-control autogrow required" id="description-poduit" required placeholder="Entrer la description d'un Vetement "></textarea>
                            </div>                   
                        </div>
                        <div class="box col-md-6">  
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nombre de Vetements en stock</label>
                                <input type="number" class="form-control required" id="nb-poduit" placeholder="Entrer le nombre de Vetements en stock">
                            </div>
                                  <div class="form-group">
                                <label for="exampleInputPassword1">Rabais(%) </label>
                                <input type="number" class="form-control required" id="nb-rabais" placeholder="Entrer un Rabais(%)">
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Activer un vetement : </label>
                                    <input data-no-uniform="true" type="checkbox" class="iphone-toggle" id='toggle-two'>
                                    
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="exampleInputPassword1">Categorie : </label>
                                    <select class="form-control" id="nb-categorie">                               
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row" id="tableday-id">
                        
                    </div>                    
                    
                    <div class="row col-md-6">
                        <div class="form-group">                            
                            <div class="col-md-3 col-md-offset-1">
                                <button type="button" id="add" class="  btn btn-success" key="ajouter_ligne">ajouter ligne</button>
                            </div>
                            <div class="col-md-3">
                              <input class=" form-control" id="ligne" type="number" aria-describedby="nameHelp" placeholder="" name="ligne" value="1">
                            </div>
                        </div>
                    </div>
                            
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-offset-9">
                                <button type="button" class="btn btn-success" onclick="modifierProduit()">Enregistrer</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> 


    <hr>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

<script src="js/Produit/creerProduit.js"></script>
<script src="js/Produit/rowCaracteristiques.js"></script>
<script src="js/Produit/modifier.js"></script>