<!-- <div class="points index">
	<h2><?php echo __('Points'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('lat'); ?></th>
			<th><?php echo $this->Paginator->sort('longitude'); ?></th>
			<th><?php echo $this->Paginator->sort('destination_id'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('schedule'); ?></th>
			<th><?php echo $this->Paginator->sort('payment'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($points as $point): ?>
	<tr>
		<td><?php echo h($point['Point']['id']); ?>&nbsp;</td>
		<td><?php echo h($point['Point']['name']); ?>&nbsp;</td>
		<td><?php echo h($point['Point']['lat']); ?>&nbsp;</td>
		<td><?php echo h($point['Point']['longitude']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($point['Destination']['name'], array('controller' => 'destinations', 'action' => 'view', $point['Destination']['id'])); ?>
		</td>
		<td><?php echo h($point['Point']['price']); ?>&nbsp;</td>
		<td><?php echo h($point['Point']['schedule']); ?>&nbsp;</td>
		<td><?php echo h($point['Point']['payment']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $point['Point']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $point['Point']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $point['Point']['id']), array(), __('Are you sure you want to delete # %s?', $point['Point']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Point'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Destinations'), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Destination'), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
<div class="Country index">
 <!--List  Open-->
      <article class="card shadow-1">
          <fieldset>
            <legend>Points</legend>
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
                  <buttom onclick="window.location.href=WEBROOT+'points/add';" class="btn btn-primary">Add Point</buttom>
                </div>
              </div>
              <div style="clear:both;"></div>
            </div>
            <!--Search Close-->
            <div class="margenesHorizontales">
              <table class="table table-striped">
                <tr>
                  <th>Name</th>
                  <th>Destination</th>
                  <th>Terminal</th>
                  <th>Price</th>
                  <th>Schedule</th>
                  <th>Payment</th>
                  <th></th>
                  
                  <th></th>
                </th>

                <?php foreach ($points as $item): ?>
					<tr>
	           <td><?php echo h($item['Point']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['Destination']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['Terminal']['name']); ?>&nbsp;</td>
	           <td><?php echo h($item['Point']['price']); ?>&nbsp;</td>
	           <td><?php echo h($item['Point']['schedule']); ?>&nbsp;</td>
	           <td><?php echo h($item['Point']['payment']); ?>&nbsp;</td>
	           						
                        <td>
		                    <div style="display: block; width: 80px; margin: 0 auto;">
	                        <?php if($this->UserAuth->getGroupId() == 1){ ?>
	  	                      <a href="<?php echo $this->webroot;?>points/edit/<?php echo $item['Point']['id'];?>" title="Editar Item" class="menuTable">
	  	                        <span class="glyphicon glyphicon-pencil"></span>
	  	                      </a>
	  	                      <a href="<?php echo $this->webroot;?>points/delete/<?php echo $item['Point']['id'];?>" onclick="if (confirm(&quot;Are you sure you want to delete the point of interest?&quot;)) { return true; } return false;" class="menuTable">
	  	                        <span class="glyphicon glyphicon-remove"></span></a>
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
<?php echo $this->Paginator->counter(array('format' => __('Page {:page} of {:pages}, showing {:current} Points of interest of {:count}  total.')));?>
</p>
<ul class="pagination">
<?php
  echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
  echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
  echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
?>
</ul>

</div>	