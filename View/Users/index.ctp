<div class="Users index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Users</legend>
            <!--Search Open-->
            <div class="margenesHorizontales">
              <div class="col-md-6">
                <div class=" margenesVerticales">
	              	<form class="right" role="search" method="get">
	                 <div class="input-group">
	                    <!-- <input type="text" class="form-control" placeholder="Buscar categories..." name="filtro">
	                    <span class="input-group-btn">
	                      <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
	                    </span> -->
	                  </div>  
									</form>            
                </div>
              </div>
              <div class="col-md-6">
                <div class=" margenesVerticales" style="text-align: right;">
                  <buttom onclick="window.location.href=WEBROOT+'users/add';" class="btn btn-primary">Add Users</buttom>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Name</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>City</th>
                  <th>Country</th>
                  <th></th>
                  
                  <th></th>
                </th>

                <?php foreach ($users as $item): ?>
					<tr>
	           <td><?php echo h($item['User']['first_name']); ?>&nbsp;</td>
	           <td><?php echo h($item['User']['username']); ?>&nbsp;</td>
	           <td><?php echo h($item['User']['email']); ?>&nbsp;</td>
	           <td><?php echo h($item['User']['ranking']); ?>&nbsp;</td>
	           <td><?php echo h($item['City']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['Country']['name']); ?>&nbsp;</td>
						
                        <td>
		                    <div style="display: block; width: 80px; margin: 0 auto;">
	                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
	  	                      <a href="<?php echo $this->webroot;?>users/edit/<?php echo $item['User']['id'];?>" title="Edit" class="menuTable">
	  	                        <span class="glyphicon glyphicon-pencil"></span>
	  	                      </a>
	  	                      <a href="<?php echo $this->webroot;?>users/delete/<?php echo $item['User']['id'];?>" onclick="if (confirm(&quot;You're about to delete a user. It's this ok?&quot;)) { return true; } return false;" class="menuTable">
	  	                        <span class="glyphicon glyphicon-remove"></span></a>
	  	                      <a href="<?php echo $this->webroot;?>users/view/<?php echo $item['User']['id'];?>" title="See Profile" class="menuTable">
                              	<span class="glyphicon glyphicon-eye-open"></span></a>
                            <?php } ?>
		                    </div>                  
		                </td>
					</tr>
								<?php endforeach; ?>
              </table>
            </div> 
          </fieldset>          
      </article>
<p>
<?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}, mostrando {:current} Personal de {:count} en total.')));?>
</p>
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>

</div>	