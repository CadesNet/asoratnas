<p>aki</p>

<a id="edit-link" href="#" ><button>Edit</button></a>
 <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a> 
<script>
	$('#edit-link').click(function(){
$.ajax({
  type: "GET",
  url: $(this).attr('href')
}).done(function(html_form) {
 // $('#myModal').html(html_form);
 $("#myModal").modal("show");
});
return false;
});
</script>

<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="width="600" height="1500"">
	  					<div class="modal-header">
	    					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
	    					<h3 id="myModalLabel">Modal header1</h3>
	  					</div>
	  					<div class="modal-body">
	    					<p>One fine body…</p>
	  					</div>
	  					<div class="modal-footer" style="">
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, magnam, adipisci nam mollitia at aspernatur id voluptates veniam aliquam fuga quam impedit fugiat libero voluptatibus iusto rerum ipsum placeat qui.</p>
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, magnam, adipisci nam mollitia at aspernatur id voluptates veniam aliquam fuga quam impedit fugiat libero voluptatibus iusto rerum ipsum placeat qui.</p>
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, magnam, adipisci nam mollitia at aspernatur id voluptates veniam aliquam fuga quam impedit fugiat libero voluptatibus iusto rerum ipsum placeat qui.</p>
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, magnam, adipisci nam mollitia at aspernatur id voluptates veniam aliquam fuga quam impedit fugiat libero voluptatibus iusto rerum ipsum placeat qui.</p>
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, magnam, adipisci nam mollitia at aspernatur id voluptates veniam aliquam fuga quam impedit fugiat libero voluptatibus iusto rerum ipsum placeat qui.</p>
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, magnam, adipisci nam mollitia at aspernatur id voluptates veniam aliquam fuga quam impedit fugiat libero voluptatibus iusto rerum ipsum placeat qui.</p>
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, magnam, adipisci nam mollitia at aspernatur id voluptates veniam aliquam fuga quam impedit fugiat libero voluptatibus iusto rerum ipsum placeat qui.</p>
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, magnam, adipisci nam mollitia at aspernatur id voluptates veniam aliquam fuga quam impedit fugiat libero voluptatibus iusto rerum ipsum placeat qui.</p>
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, magnam, adipisci nam mollitia at aspernatur id voluptates veniam aliquam fuga quam impedit fugiat libero voluptatibus iusto rerum ipsum placeat qui.</p>
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, magnam, adipisci nam mollitia at aspernatur id voluptates veniam aliquam fuga quam impedit fugiat libero voluptatibus iusto rerum ipsum placeat qui.</p>
	  					v
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, magnam, adipisci nam mollitia at aspernatur id voluptates veniam aliquam fuga quam impedit fugiat libero voluptatibus iusto rerum ipsum placeat qui.</p>
	  					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil, magnam, adipisci nam mollitia at aspernatur id voluptates veniam aliquam fuga quam impedit fugiat libero voluptatibus iusto rerum ipsum placeat qui.</p>
	    					<button id="ok" class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	    					<button class="btn btn-primary">Save changes</button>
	    					<a  href="#myModal1" role="button" class="btn" data-toggle="modal1">Launch demo modal</a>
	  					</div>
	  				</div>

	  				<script>
	$('#ok').click(function(){
$.ajax({
  type: "GET",
  url: $(this).attr('href')
}).done(function(html_form) {
 $('#myModal').html(html_form);
 $("#myModal").modal("show");
});
return false;
});
</script>