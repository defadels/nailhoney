@extends('layout.admin_layout')


@section('title', 'Isi Konten Blog')

@section('page_style')

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@endsection

@section('content')
<!--breadcrumb-->
<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
    <div class="breadcrumb-title pr-3">Blog</div>
    <div class="pl-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
                <li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
        </nav>
    </div>
    <div class="ml-auto">
            <button class="btn btn-outline-danger" data-toggle="modal" data-target="#exampleModal5">Hapus</button>
    </div>
</div>
<!--end breadcrumb-->
<div class="card radius-15">
    <div class="card-body">
        <div class="card-title">
            <h4 class="mb-0">Konten Blog</h4>
        </div>
        <hr/>
        
        {!! Form::model($blog, ['route' => ['admin.blog.content.update', $blog->id],'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
        
        <div class="form-group col-6">
            <h6>Judul : <strong>{{$blog->judul}}</strong></h6>
            <h6>Kategori : {{$blog->kategori->nama}}</h6>
            <h6>Penulis : {{$blog->penulis}}</h6>
            <h6>Abstrak :</h6>
            <p>{{$blog->abstrak}}</p>
        </div>

        <div class="form-group">
        {{-- <textarea id="summernote" name="konten" value="{{old('konten') ?? $blog->konten ?? ''}}"></textarea> --}}
        {!! Form::textarea('konten', old('konten'), ['class' => 'form-control', 'rows' => '3', 'id' => 'summernote']) !!}
        </div>

        <hr>
        <input type="submit" class="btn btn-md btn-primary" value="Simpan">

    </div>
    {!! Form::close() !!}
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-hidden="true">
{!! Form::open(['url' => route('admin.blog.destroy',$blog->id), 'method' => 'DELETE']) !!}	
        <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Anda yakin ingin hapus data?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">	<span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">Penghapusan data akan mengakibatkan kejadian yang fatal
                        pada data Anda. Yakin untk menghapus?</div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-md btn-danger" value="Hapus">
                    
                    </div>
                </div>
            </div>
    {!! Form::close() !!}
        </div>
@endsection

@section('page_script')
	<script src="{{asset('/assets-admin/plugins/input-tags/js/tagsinput.js') }}"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>

	<script>
      $('#summernote').summernote({
        placeholder: 'Konten blog',
        tabsize: 2,
        height: 1500
      });
    </script>
	@endsection