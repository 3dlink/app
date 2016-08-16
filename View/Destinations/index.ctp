<!-- <div class="destinations index">
	<h2><?php echo __('Destinations'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('city_id'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('region_id'); ?></th>
			<th><?php echo $this->Paginator->sort('park_id'); ?></th>
			<th><?php echo $this->Paginator->sort('lat'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th><?php echo $this->Paginator->sort('photo1'); ?></th>
			<th><?php echo $this->Paginator->sort('ranking'); ?></th>
			<th><?php echo $this->Paginator->sort('security'); ?></th>
			<th><?php echo $this->Paginator->sort('environment'); ?></th>
			<th><?php echo $this->Paginator->sort('budget'); ?></th>
			<th><?php echo $this->Paginator->sort('affluence'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($destinations as $destination): ?>
	<tr>
		<td><?php echo h($destination['Destination']['id']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['name']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($destination['Type']['name'], array('controller' => 'types', 'action' => 'view', $destination['Type']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($destination['State']['name'], array('controller' => 'states', 'action' => 'view', $destination['State']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($destination['City']['name'], array('controller' => 'cities', 'action' => 'view', $destination['City']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($destination['Country']['name'], array('controller' => 'countries', 'action' => 'view', $destination['Country']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($destination['Region']['name'], array('controller' => 'regions', 'action' => 'view', $destination['Region']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($destination['Park']['name'], array('controller' => 'parks', 'action' => 'view', $destination['Park']['id'])); ?>
		</td>
		<td><?php echo h($destination['Destination']['lat']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['longitude']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['photo1']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['ranking']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['security']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['environment']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['budget']); ?>&nbsp;</td>
		<td><?php echo h($destination['Destination']['affluence']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $destination['Destination']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $destination['Destination']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $destination['Destination']['id']), array(), __('Are you sure you want to delete # %s?', $destination['Destination']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Destination'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Types'), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type'), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('controller' => 'states', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('controller' => 'states', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Regions'), array('controller' => 'regions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Region'), array('controller' => 'regions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Parks'), array('controller' => 'parks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Park'), array('controller' => 'parks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Commentaries'), array('controller' => 'commentaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Commentary'), array('controller' => 'commentaries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Forumqs'), array('controller' => 'forumqs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Forumq'), array('controller' => 'forumqs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Points'), array('controller' => 'points', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Point'), array('controller' => 'points', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Activities'), array('controller' => 'activities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Activity'), array('controller' => 'activities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Terminals'), array('controller' => 'terminals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Terminal'), array('controller' => 'terminals', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->
<div class="Destination index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Destinations</legend>
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
                  <buttom onclick="window.location.href=WEBROOT+'destinations/add';" class="btn btn-primary">Add Destination</buttom>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Name</th>
                  <th>Type</th>
                  <th>City</th>
                  <th>State</th>
                  <th>Region</th>
                  <th>Country</th>
                  <th>Ranking</th>
                  <th></th>
                  
                  <th></th>
                </th>

                <?php foreach ($destinations as $item): ?>
					<tr>
	           <td><?php echo h($item['Destination']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['Type']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['City']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['State']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['Region']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['Country']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['Destination']['ranking']); ?>&nbsp;</td>
						
                        <td>
		                    <div style="display: block; width: 80px; margin: 0 auto;">
	                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
	  	                      <a href="<?php echo $this->webroot;?>destinations/edit/<?php echo $item['Destination']['id'];?>" title="Editar Item" class="menuTable">
	  	                        <span class="glyphicon glyphicon-pencil"></span>
	  	                      </a>
	  	                      <a href="<?php echo $this->webroot;?>destinations/delete/<?php echo $item['Destination']['id'];?>" onclick="if (confirm(&quot;¿Seguro que desea borrar el Personal?&quot;)) { return true; } return false;" class="menuTable">
	  	                        <span class="glyphicon glyphicon-remove"></span></a>
	  	                      <a href="<?php echo $this->webroot;?>destinations/view/<?php echo $item['Destination']['id'];?>" title="Ver Detalles" class="menuTable">
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