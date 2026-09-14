<script setup>
import { ref } from 'vue';

const content = ref('');
const size = ref(200);
const color = ref('#000000');
const qrImage = ref(null);
const isLoading = ref(false);

const generateQr = async () => {
  if (!content.value.trim()) return;

  isLoading.value = true;
  try {
    const response = await axios.post('/qr/generate', {
      content: content.value,
      size: size.value,
      color: color.value,
    });
    qrImage.value = response.data.svg;
  } catch (error) {
    console.error('Error al generar el QR:', error);
  } finally {
    isLoading.value = false;
  }
};

// Función para descargar el SVG directamente
const downloadQr = () => {
  if (!qrImage.value) return;

  const blob = new Blob([qrImage.value], { type: 'image/svg+xml' });
  const url = URL.createObjectURL(blob);
  const link = document.createElement('a');
  link.href = url;
  link.download = 'codigo-qr.svg';
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
  URL.revokeObjectURL(url);
};
</script>

<template>
  <div class="qr-builder-section row g-4 align-items-start">
    <!-- Formulario de Configuración -->
    <div class="col-lg-6">
      <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header bg-white py-3 border-bottom border-light">
          <h5 class="card-title m-0 fw-bold text-dark">Configurar Código QR</h5>
        </div>
        <div class="card-body p-4">
          <form @submit.prevent="generateQr">
            <!-- Contenido/URL -->
            <div class="mb-3">
              <label class="form-label fw-semibold">Texto o URL</label>
              <input
                v-model="content"
                type="text"
                class="form-control"
                placeholder="https://tu-sitio-web.com"
                required
              />
            </div>

            <!-- Tamaño y Color -->
            <div class="row g-3 mb-4">
              <div class="col-md-6">
                <label class="form-label fw-semibold">Tamaño (px)</label>
                <input
                  v-model.number="size"
                  type="number"
                  class="form-control"
                  min="100"
                  max="500"
                  step="50"
                />
              </div>
              <div class="col-md-6">
                <label class="form-label fw-semibold">Color del QR</label>
                <input
                  v-model="color"
                  type="color"
                  class="form-control form-control-color w-100"
                />
              </div>
            </div>

            <!-- Botón de Generación -->
            <button
              type="submit"
              class="btn btn-primary w-100 py-2 fw-bold"
              :disabled="isLoading || !content"
            >
              <span v-if="isLoading" class="spinner-border spinner-border-sm me-2"></span>
              {{ isLoading ? 'Generando...' : 'Generar Código QR' }}
            </button>
          </form>
        </div>
      </div>
    </div>

    <!-- Vista Previa del QR -->
    <div class="col-lg-6">
      <div class="card shadow-sm border-0 rounded-3 text-center">
        <div class="card-header bg-white py-3 border-bottom border-light">
          <h5 class="card-title m-0 fw-bold text-dark">Vista Previa</h5>
        </div>
        <div class="card-body p-4 d-flex flex-column align-items-center justify-content-center">
          <div 
            class="qr-preview-box w-100 p-4 mb-3" 
            v-html="qrImage || '<p class=\'text-muted m-0\'>Ingresa un texto o URL para visualizar el QR</p>'"
          ></div>

          <button
            v-if="qrImage"
            class="btn btn-outline-dark btn-sm rounded-pill px-4"
            @click="downloadQr"
          >
            Descargar SVG
          </button>
        </div>
      </div>
    </div>
  </div>
</template>