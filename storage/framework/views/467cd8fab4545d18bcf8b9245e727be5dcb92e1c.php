<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
        nav svg{
            height: 20px;
            padding: 10px;
            
        }
        nav .hidden{
            display: block !important;
            padding: 20px;
        }
        a{
            text-decoration: none;
            color:black;
        }
        body{
            background-color: #bcd4e6;
        }
        table {
            border-radius:6px;
        }
        th,td{
            height: 70px;
            text-align: center;
        }
        th,td{
            height: 70px;
            text-align: center;
            border: 1px dotted;
        }
        th{
            border-top: none;
        }
       
 fieldset{
        border: 2px solid black;
  border-radius: 30px;
    }
    
.roundedTable {
   
   border-radius: 1.2em ;
   border: 1px red;
   overflow: hidden;
   width: 100%;
   margin: 0;
}
        




    </style>

<br> <br> 

<div style="overflow-x:auto;">
<div style="border:1px solid black;padding:30px;border-radius:30px;background-color:white;" class="container">
<fieldset>
<table  style="border-radius: 25px !important;" class="table table-striped roundedTable">

<tr > 
<th> First Name</th>
<th> Salary</th>
<th> Performance</th>
<th> Rating</th>
<th> cr</th>
<th> Cr_group</th>
<th> Performance Rating</th>
<th> cr_grouping</th>
<th> Inc Percentage</th>
<th> Inc Salary By</th>
</tr>
<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
<td> <?php echo e($d->firstname); ?> </td>
<td> <?php echo e($d->currentsalary); ?> </td>
<td> <?php echo e($d->performance); ?> </td>
<td> <?php echo e($d->rating); ?> </td>
<td> <?php echo e($d->cr); ?> </td>
<td> <?php echo e($d->crgrouping); ?> </td>
<td> <?php echo e($d->Performance_Rating); ?> </td>
<td> <?php echo e($d->CR_Grouping); ?> </td>
<td> <?php echo e($d->Inc_Percentage); ?> </td>
<?php 

    $u=($d->currentsalary * $d->Inc_Percentage)/100;
    echo " <td> $u</td> ";
?>

</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  


</fieldset>
</table>
<?php echo e($users->links()); ?>

</div>
</div>
<?php /**PATH E:\Angular\resources\views//calc.blade.php ENDPATH**/ ?>