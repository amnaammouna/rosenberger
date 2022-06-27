@section('content')
<!DOCTYPE html>
<html>
   <head>
   <meta charset="UTF-12">
              <title></title>
        <link rel="stylesheet"
        href="http://kendo.cdn.telerik.com/2016.2.714/styles/kendo.common.min.css">
        <link rel="stylesheet"
		href="http://kendo.cdn.telerik.com/2016.2.714/styles/kendo.default.min.css">
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="http://kendo.cdn.telerik.com/2016.2.714/js/kendo.all.min.js"></script>
		
		<!-- Styles -->
		
		</head>
					<body>
					 @foreach($productions as $production)
					<div id="grid" style="margin: auto;">
					</div>
					<script>
					 $productions = [{
					{{$production->id}},
					{{$production->date}},
					{{$production->article}},
					}, ]; 
					$(document).ready(function () {
					$("#grid").kendoGrid({
					dataSource: {
					data: $productions,
					schema: {
					model: {
					id: "$production->id",
					fields: {$production->date: {
							type: "string"
							}
					}
					},
					}
					},
					pageSize: 10
					},
					sortable: false,
					filterable: true,
					pageable: true,
					columns: [
					{ field: "$production->date", title: "Date" },
					{ field: "$production->article", title: "Article" },
					{ field: "$production->description", title: "Description" },
					{ field: "$production->ref_pa", title: "Ref pA" },
					{ field: "$production->etape_de_travail", title: "Etape de travail" },
					{ field: "$production->operateur", title: "Operateur" },
					{ field: "$production->opr_prenom", title: "Prenom op" },
					{ field: "$production->opr_nom", title: "Prenom op" },
					{ field: "$production->heure_de_travail", title: "heure de travail" },
					{ field: "$production->machine", title: "machine" },
					{ field: "$production->panne", title: "panne(min)" },
					{ field: "$production->descriptio_machine", title: "descriptio_machine" },
					{ field: "$production->retard_alimentation_logique", title: "Retard Alimentation LOG" },
					{ field: "$production->performance_sol", title: "performance sol" },
					{ field: "$production->quantite_produit", title: "quantité produit" },
					{ field: "$production->faute1", title: "Faute 1" },
					{ field: "$production->non_conforme1", title: "Non Conforme 1" },

					{ field: "$production->code_faute1", title: "code de faute 1" },
					{ field: "$production->faute2", title: "Faute 2" },
					{ field: "$production->non_conforme2", title: "Non Conforme 2" },
					{ field: "$production->code_faute2", title: "code de faute 2" },
				

					{ command: ["edit", "destroy"], title: "&nbsp;" }
					],
					editable: "inline"
					});
					});
					</script>
					 @endforeach
					</body>
					</html>
					
@endsection