
<div class="container">
    <h2 class="pt-5 text-white">Cas Applications</h2>
	<div class="container pt-3">
        <div class="tab-content mt-3">
            <div class="tab-pane active" id="Cas_Applications">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table table-hover">
                            <thead>
                                <tr style="height: 50px;">
                                    <th scope="col">Sr No.</th>
                                    <th scope="col" style="width: 250px;">Name</th>
                                    <th scope="col" style="width: 400px;">Email</th>
                                    <th scope="col" style="width: 250px;">Employee Code</th>
                                    <th scope="col" style="width: 250px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; foreach($applications as $applications): ?>
								<tr>
									<td class="text-dark" style="width: 100px;"><?= $applications->Id;?></td>
									<td><?= $applications->Firstname;?> <?= $applications->Middlename;?> <?= $applications->Surname;?></td>
									<td><a href="#" style="background-color: rgba(149, 165, 166,0.5);text-decoration: none;padding: 5px;border-radius: 5px;cursor: default;"><?= $applications->Email;?></a></td>
									<td><?= $applications->EmployeeCode;?></td>
                                    
									<td style="text-align: center;"><a class="text-info" style="margin-right: 10px;padding: 10px;font-size: 18px;" id="view_form" href="<?= base_url('formcontroller/viewDetails/'.$applications->Id) ?>" id="view_form"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    <?php if($applications->status == '1' || $applications->status == '2' || $applications->status == '3'):?>
                                        <a class="text-success"  href="#" style="margin-right: 10px;padding: 10px;font-size: 18px;" id="approved"> <i class="fa fa-check-circle" aria-hidden="true"></i></a>
                                    <?php else:?>
                                        <a class="text-danger" style="margin-right: 10px;padding: 10px;font-size: 18px;" id="approve" href="<?= base_url('formcontroller/updateStatus/'.$applications->Id)?>"><i class="fa fa-check-circle" aria-hidden="true"></i>
                                    <?php endif ?>
                                    <a class="text-danger" id="reject" href="<?= base_url('formcontroller/reject/'.$applications->Id)?>"><i class="fa fa-times" aria-hidden="true"></i></td>
                                    <?php $i = $i+1 ;?>
								</tr>
								<?php endforeach?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
