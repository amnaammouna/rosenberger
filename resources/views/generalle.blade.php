<head>
<style >

#myInput {
  background-image: url('/css/searchicon.png'); /* Add a search icon to input */
  background-position: 10px 12px; /* Position the search icon */
  background-repeat: no-repeat; /* Do not repeat the icon image */
  width: 100%; /* Full-width */
  font-size: 16px; /* Increase font-size */
  padding: 12px 20px 12px 40px; /* Add some padding */
  border: 1px solid #ddd; /* Add a grey border */
  margin-bottom: 12px; /* Add some space below the input */
}

#myTable {
  border-collapse: collapse; /* Collapse borders */
  width: 100%; /* Full-width */
  border: 1px solid #ddd; /* Add a grey border */
  font-size: 18px; /* Increase font-size */
}

#myTable th, #myTable td {
  text-align: left; /* Left-align text */
  padding: 12px; /* Add padding */
}

#myTable tr {
  /* Add a bottom border to all table rows */
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  /* Add a grey background color to the table header and on hover */
  background-color: #f1f1f1;
}
</style>


</head>






<i class="fas fa-search"></i>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">

<table id="myTable" style="margin: auto">
  <tr class="header">
    <th style="width:30%;">id</th>
    <th style="width:30%;">date</th>
    <th style="width:30%;">article</th>
    <th style="width:30%;">description</th>
    <th style="width:30%;">ref_pa</th>
    <th style="width:30%;">etape_de_travail</th>
    <th style="width:30%;">operateur</th>
    <th style="width:30%;">ope_prenom</th>
    <th style="width:30%;">ope_nom</th>
    <th style="width:30%;">heure_de_traval</th>
    <th style="width:30%;">machine</th>
    <th style="width:30%;">panne</th>
    <th style="width:30%;">description_machine</th>
    <th style="width:30%;">retard_alimentation_logique</th>
    <th style="width:30%;">performance_sol</th>
    <th style="width:30%;">quantité_produit</th>
    <th style="width:30%;">faute1</th>
    <th style="width:30%;">non_conforme1</th>
    <th style="width:30%;">code_de_faute1</th>
    <th style="width:30%;">faute2</th>
    <th style="width:30%;">non_conforme2</th>
    <th style="width:30%;">code_de_faute2</th>
    <th style="width:30%;">faute3</th>
    <th style="width:30%;">non_conforme3</th>
    <th style="width:30%;">code_de_faute3</th>
    <th style="width:30%;">taux_rebut</th>
    <th style="width:30%;">productivité</th>
    <th style="width:30%;">disponibilité_machine</th>
   
  </tr>
  @foreach($productions as $p )
  <tr>
  
    <td>{{$p->id}}</td>
    <td>{{$p->date}}</td>
    <td>{{$p->article}}</td>
    <td>{{$p->description}}</td>
    <td>{{$p->etape_de_travail}}</td>
    <td>{{$p->operateur}}</td>
    <td>{{$p->ope_prenom}}</td>
    <td>{{$p->ope_nom}}</td>
    <td>{{$p->heure_de_traval}}</td>
    <td>{{$p->machine}}</td>
    <td>{{$p->panne}}</td>
    <td>{{$p->description_machine}}</td>
    <td>{{$p->retard_alimentation_logique}}</td>
    <td>{{$p->performance_sol}}</td>
    <td>{{$p->quantité_produit}}</td>
    <td>{{$p->faute1}}</td>
    <td>{{$p->non_conforme1}}</td>
    <td>{{$p->code_de_faute1}}</td>
    <td>{{$p->faute2}}</td>
    <td>{{$p->non_conforme2}}</td>
    <td1>{{$p->code_de_faute2}}</td1>
    <td>{{$p->faute3}}</td>
    <td>{{$p->non_conforme3}}</td>
    <td>{{$p->code_de_faute3}}</td>
    <td>{{$p->taux_rebut}}</td>
    <td>{{$p->productivité}}</td>
    <td>{{$p->disponibilité_machine}}</td>
    

  </tr>
  @endforeach
  
  
  
</table>
<script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>