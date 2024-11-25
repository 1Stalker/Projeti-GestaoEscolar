<div class="teachers-leave">
	<div class="row pb-10 teacher-leave-insights mt-1 g-4">
		<div class="col-xl-3 col-lg-3 col-md-6 mb-20">

			<div class="card mb-3 shadow h-100 total-staff-insight" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-4">
						<div class="side-icon">
							<i class='bx bxs-user-account '></i>

						</div>
					</div>
					<div class="col-8">
						<div class="card-body">
							<h5 class="card-title" id="total-teacher-number">_ _ _ _</h5>
							<h6 class="card-title">Total de professores</h6>

						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
			<div class="card mb-3 shadow h-100 approved-insight" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-4">
						<div class="side-icon">
							<i class='bx bxs-hourglass-bottom'></i>

						</div>
					</div>
					<div class="col-8">
						<div class="card-body">
							<h5 class="card-title" id="approved-leave-number">_ _ _ _</h5>
							<h6 class="card-title">Folhas Aprovadas</h6>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
			<div class="card mb-3 shadow h-100 pending-insight" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-4">
						<div class="side-icon">
							<i class='bx bxs-hourglass'></i>

						</div>
					</div>
					<div class="col-8">
						<div class="card-body">
							<h5 class="card-title" id="pending-leave-number">_ _ _ _</h5>
							<h6 class="card-title">Folhas Pendentes</h6>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
			<div class="card mb-3 shadow h-100 rejected-insight" style="max-width: 540px;">
				<div class="row g-0">
					<div class="col-4">
						<div class="side-icon">

							<i class='bx bx-hourglass'></i>
						</div>
					</div>
					<div class="col-8">
						<div class="card-body">
							<h5 class="card-title" id="rejected-leave-number">_ _ _ _</h5>
							<h6 class="card-title">Folhas Rejeitadas</h6>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container mt-5">

		<ul class="nav nav-pills">

			<li class="nav-item">
				<span class="nav-link me-2 active cursor-pointer" id="pending-leave-tab" onclick="tabButtonClicked('pending')">Pending Leaves</span>
			</li>
			<li class="nav-item me-2">
				<span class="nav-link cursor-pointer " id="approved-leave-tab" onclick="tabButtonClicked('approved')">Approved Leaves</span>
			</li>
			<li class="nav-item">
				<span class="nav-link me-2 cursor-pointer" id="rejected-leave-tab" onclick="tabButtonClicked('rejected')">Rejected Leaves</span>
			</li>

		</ul>

		<div class="card my-3 border-0 leave-list-box">

			<table>
				<thead>
					<tr>
						<th class="fs-6 text-center pt-3">NOME DA EQUIPE</th>
						<th class="fs-6 text-center pt-3">TIPO DE LICENÇA</th>
						<th class="fs-6 text-center pt-3">DATA DE APLICAÇÃO</th>
						<th class="fs-6 text-center pt-3">INTERVALO DE DATAS</th>
						<th class="fs-6 text-center pt-3">AÇÃO</th>
					</tr>
				</thead>
				<tbody id="leaves-table">

					<tr>
						<td class="text-center">Shubham kumar</td>
						<td class="text-center">Licença médica</td>
						<td class="text-center">12 de março de 2022</td>
						<td class="text-center">12 de março de 2022 - 14 de março de 2022</td>
						<td class="content-center">
							<div class="d-flex small-flex-column">
								<span data-bs-toggle="modal" data-bs-target="#view-leave-modal">
									<button class="btn btn-warning me-1 btn-sm border-0 d-flex justify-content-center text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="View Details">
										<i class='bx bx-show-alt'></i>
									</button>
								</span>
								<button class="btn btn-success me-1 btn-sm border-0 d-flex justify-content-center text-center">
									<i class='bx bx-dots-horizontal'></i>
								</button>
							</div>

						</td>
					</tr>
					<tr>
						<td class="text-center">Rajat kumar</td>
						<td class="text-center">Jacob</td>
						<td class="text-center">Thornton</td>
						<td class="text-center">@fat</td>
						<td class="content-center">
							<div class="d-flex small-flex-column">
								<span data-bs-toggle="modal" data-bs-target="#view-leave-modal">
									<button class="btn btn-warning me-1 btn-sm border-0 d-flex justify-content-center text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="View Details">
										<i class='bx bx-show-alt'></i>
									</button>
								</span>
								<button class="btn btn-success me-1 btn-sm border-0 d-flex justify-content-center text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Approve Leave">
									<i class='bx bx-check'></i>
								</button>
								<button class="btn btn-danger me-1 btn-sm border-0 d-flex justify-content-center text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Reject Leave">
									<i class='bx bx-x'></i>
								</button>
							</div>
						</td>
					</tr>
					<tr>
						<td class="text-center">Tushar srivastav</td>
						<td class="text-center">Larry the Bird</td>
						<td class="text-center">@twitter</td>
						<td class="text-center">@twitsdfter</td>
						<td class="content-center">
							<div class="d-flex small-flex-column">
								<span data-bs-toggle="modal" data-bs-target="#view-leave-modal">
									<button class="btn btn-warning me-1 btn-sm border-0 d-flex justify-content-center text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="View Details">
										<i class='bx bx-show-alt'></i>
									</button>
								</span>
								<button class="btn btn-danger me-1 btn-sm border-0 d-flex justify-content-center text-center" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-custom-class="custom-tooltip" data-bs-title="Delete">
									<i class='bx bxs-trash'></i>
								</button>
							</div>
						</td>
					</tr>
				</tbody>
			</table>

		</div>

		<div class="dataNotAvailable" id="NoLeavesAvailable">
			<div class="_flex-container box-hide">
				<div class="no-data-box">
					<div class="no-dataicon">
						<i class='bx bxs-file'></i>
					</div>
					<p>Sem folhas</p>
				</div>
			</div>
		</div>

		<hr class="text-danger">

		<div id="leave-pagination">
			<div class="d-grid gap-2 d-md-flex justify-content-md-end">
				<div class="btn-group" role="group" aria-label="Basic example">
					<button type="button" class="btn btn-secondary" id="leave-prev-btn">anterior</button>
					<a class="btn btn-secondary disabled" role="button" aria-disabled="true" id="leave-page-number">1</a>
					<button type="button" class="btn btn-secondary" id="leave-next-btn">próximo</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- start view model -->


<div class="modal fade view-leave-modal" id="view-leave-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content" id="view-modal-content" style="display: none;">
			
		</div>
		<div class="modal-content" id="no-data-view-modal-content">
			<div class="modal-header">

				<h1 class="modal-title fs-5" id="staticBackdropLabel" id="teacher_name">
				Por favor, aguarde
				</h1>
				<button type="button" class="close mr-2" data-bs-dismiss="modal" aria-label="Close"><i class='bx bx-x'></i></button>
			</div>
			<div class="modal-body px-3">

				<div class="dataNotAvailable"  style="display:block;">
					<div class="_flex-container box-hide">
						<div class="no-data-box">
							<div class="no-dataicon">
							<i class='bx bxs-hourglass'></i>
							</div>
							<p>Por favor, aguarde</p>
						</div>
					</div>
				</div>

			</div>
			<div class="modal-footer">

				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>

			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="approved-confirmation-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog  modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
			</div>
			<div class="modal-body">
				<strong>Você quer aprovar esta Licença?</strong>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-success" onclick="changeStatusOfLeave()">Aprovar</button>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="reject-confirmation-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog  modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
			</div>
			<div class="modal-body">
				<strong>Você realmente quer rejeitar esta licença?</strong>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-danger" onclick="changeStatusOfLeave()">Rejeitar</button>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="delete-leave-confirmation-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog  modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
			</div>
			<div class="modal-body">
				<strong>Você realmente deseja excluir esta licença?</strong>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
				<button type="button" class="btn btn-danger" onclick="deleteLeave()">Delete</button>
			</div>
		</div>
	</div>
</div>
<!-- end view model -->