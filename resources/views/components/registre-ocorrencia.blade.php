<div class="container my-5">
    <div class="row pb-0 pe-lg-0 align-items-center rounded-3 border shadow-lg">
      <div class="col-lg-7 p-3 p-lg-5 pt-lg-3">
        <h1 class="display-4 fw-bold lh-1">Você tem algum animalzinho perdido?</h1>
        <p class="lead">Nao perca tempo! Ele deve estar assustado sem seu papai e sua mamae agora, nosso site pode te ajudar. Cadastre seu animalzinho e busque por ele!</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3">
          <button type="button" @if (auth()->check()) onclick="window.location.href='{{ route('animals.create') }}'"
          @else  onclick="window.location.href='{{ route('login.index') }}'"
          @endif class="btn btn-dark btn-lg px-4 me-md-2 fw-bold">Cadastrar ocorrência</button>
          <button type="button" class="btn btn-outline-dark btn-lg px-4"> Achei um animal! </button>
        </div>
      </div>
      <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg img rounded">
          <img class="rounded-lg-3 h-100" src="{{ asset('assets/freepik__orange-gradient__24661.png') }}" alt="" width="1024">
      </div>
    </div>
</div>
