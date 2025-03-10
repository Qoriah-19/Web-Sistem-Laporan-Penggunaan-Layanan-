@extends('layouts.app')

@section('content')
<!-- Modal -->
<div class="modal fade" id="editKuesionerModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Kuesioner</h5>
                <button type="button" class="btn-close" onclick="window.location.href='{{ route('kuesioner.index') }}'"></button>
            </div>
            <div class="modal-body">
                <form action="#" method="POST">
                    @csrf

                    <!-- Pertanyaan 1 -->
                    <p>Apakah memanfaatkan lisensi Adobe CC pengadaan tahun 2024?</p>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="memanfaatkan_adobe" id="ya" value="Ya">
                        <label class="form-check-label" for="ya">Ya</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="memanfaatkan_adobe" id="tidak" value="Tidak">
                        <label class="form-check-label" for="tidak">Tidak</label>
                    </div>

                    <!-- Pertanyaan 2 -->
                    <p class="mt-3">Aplikasi apa saja yang digunakan?</p>
                    <div class="row">
                        @php
                            $aplikasi = ['Acrobat', 'Aero', 'After Effect', 'Animate', 'Audition', 'Dimension',
                                         'Dreamweaver', 'Express', 'Fresco', 'Illustrator', 'InCopy', 'InDesign',
                                         'Lightroom', 'Photoshop', 'Premiere Pro', 'Premiere Rush', 'XD'];
                        @endphp
                        @foreach ($aplikasi as $app)
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="{{ $app }}" name="aplikasi[]" value="{{ $app }}">
                                    <label class="form-check-label" for="{{ $app }}">{{ $app }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pertanyaan 3 -->
                    <p class="mt-3">Produk apa saja yang dihasilkan menggunakan Adobe CC 2024?</p>
                    <div class="row">
                        @php
                            $produk = ['Publikasi', 'BRS', 'Infografis', 'Flyer/VB', 'Spanduk', 
                                       'Surat/Dokumen', 'Website', 'Dashboard', 'Video'];
                        @endphp
                        @foreach ($produk as $item)
                            <div class="col-md-4 mb-2">
                                <label>{{ $item }}:</label>
                                <input type="number" class="form-control" name="produk[{{ $item }}]" min="0">
                            </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <label>Lainnya:</label>
                            <input type="text" class="form-control" name="produk_lainnya">
                        </div>
                        <div class="col-md-6">
                            <label>Jumlah:</label>
                            <input type="number" class="form-control" name="jumlah_lainnya" min="0">
                        </div>
                    </div>

                    <!-- Tombol -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" onclick="window.location.href='{{ route('kuesioner.index') }}'">Batal</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Script untuk menampilkan modal otomatis -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var myModal = new bootstrap.Modal(document.getElementById('editKuesionerModal'));
        myModal.show();
    });
</script>
@endsection
