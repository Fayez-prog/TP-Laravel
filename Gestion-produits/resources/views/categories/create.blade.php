@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        <i class="fas fa-plus-circle me-2"></i>Créer une nouvelle catégorie
                    </h4>
                </div>

                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nom" class="form-label fw-bold">
                                <i class="fas fa-tag me-1"></i>Nom de la catégorie
                            </label>
                            <input type="text" 
                                   class="form-control @error('nom') is-invalid @enderror" 
                                   id="nom" 
                                   name="nom" 
                                   value="{{ old('nom') }}"
                                   placeholder="Entrez le nom de la catégorie"
                                   required
                                   autofocus>

                            @error('nom')
                                <div class="invalid-feedback">
                                    <i class="fas fa-exclamation-circle me-1"></i>
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-4">
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary me-md-2">
                                <i class="fas fa-arrow-left me-1"></i>Retour
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save me-1"></i>Enregistrer
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@section('styles')
<style>
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .card-header {
        border-radius: 10px 10px 0 0 !important;
    }
    .form-control:focus {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
</style>
@endsection

@section('scripts')
@if($errors->any())
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const firstErrorField = document.querySelector('.is-invalid');
        if (firstErrorField) {
            firstErrorField.scrollIntoView({
                behavior: 'smooth',
                block: 'center'
            });
        }
    });
</script>
@endif
@endsection
@endsection