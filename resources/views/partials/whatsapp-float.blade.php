@php
    $waNumber = preg_replace('/\D/', '', \App\Models\CompanySetting::getVal('contact_phone', '+62 711 445566'));
@endphp
<a href="https://wa.me/{{ $waNumber }}?text={{ urlencode('Halo, saya ingin berkonsultasi mengenai proyek.') }}"
   target="_blank" rel="noopener"
   class="position-fixed bottom-0 end-0 m-4 btn btn-success rounded-pill shadow-lg px-3 py-2"
   style="z-index: 1050;">
    <i class="bi bi-whatsapp me-1"></i> WhatsApp
</a>