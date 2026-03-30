<?php
session_start();

// ════════════════════════════════════════════════════════════
//  GRUPO ISCE – MODO DEMO (sin conexiones a bases de datos)
//  Usuario: demo | Contraseña: demo1234
// ════════════════════════════════════════════════════════════

// ────────────────────────────────────────────────
// DATOS DE PRUEBA — reemplaza BD y SatoLink
// ────────────────────────────────────────────────

$DEMO_USUARIOS = [
    'demo' => [
        'id'             => 1,
        'id_cliente'     => 1,
        'nombre_cliente' => 'Usuario Demo ISCE',
        'usuario'        => 'demo',
        // password_hash('demo1234', PASSWORD_DEFAULT)
        'contrasena'     => '$2y$10$Kz3Q1XvYmN8pL5wT0uRjOeGhB7dAqZoWcViJfSxM4EnPtUlY6Rs2C',
        'activo'         => 1,
        'es_admin'       => 1,
    ],
];

$DEMO_REFERENCIAS = [
    'PRUEBA-001' => [
        'NumeroDeReferencia' => 'PRUEBA-001',
        'FechaApertura'      => '2024-11-05',
        'id_referencias'     => 1001,
        'id_cliente'         => 1,
        'nombre_cliente'     => 'Importaciones del Pacífico S.A. de C.V.',
        'ultimo_evento'      => [
            'Tipo'              => 'IMPORTACIÓN',
            'Descripcion'       => 'Pedimento pagado y liberado en aduana',
            'FechaHoraCapturada'=> '2024-11-18 14:32:00',
        ],
        'fechas_eventos' => [
            3  => '2024-11-08 09:00:00',
            6  => '2024-11-10 11:45:00',
            10 => '2024-11-12 16:20:00',
            15 => '2024-11-13 10:10:00',
            29 => '2024-11-15 13:55:00',
            32 => '2024-11-16 08:30:00',
            49 => '2024-11-18 17:00:00',
        ],
        'documentos' => [
            ['idDocumento'=>1,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'Pedimento_PRUEBA001.pdf','tamano'=>'245 KB'],
            ['idDocumento'=>2,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'Factura_Proveedor_001.pdf','tamano'=>'180 KB'],
            ['idDocumento'=>3,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'ListaEmpaque_001.xlsx','tamano'=>'98 KB'],
            ['idDocumento'=>4,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'BL_Revalidado_001.pdf','tamano'=>'320 KB'],
        ],
    ],
    'PRUEBA-002' => [
        'NumeroDeReferencia' => 'PRUEBA-002',
        'FechaApertura'      => '2024-11-20',
        'id_referencias'     => 1002,
        'id_cliente'         => 1,
        'nombre_cliente'     => 'Importaciones del Pacífico S.A. de C.V.',
        'ultimo_evento'      => [
            'Tipo'              => 'IMPORTACIÓN',
            'Descripcion'       => 'Mercancía en proceso de previo físico',
            'FechaHoraCapturada'=> '2024-11-25 09:15:00',
        ],
        'fechas_eventos' => [
            3  => '2024-11-22 07:30:00',
            6  => '2024-11-23 14:00:00',
            10 => null,
            15 => '2024-11-25 09:15:00',
            29 => null,
            32 => null,
            49 => null,
        ],
        'documentos' => [
            ['idDocumento'=>5,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'Pedimento_PRUEBA002_borrador.pdf','tamano'=>'210 KB'],
            ['idDocumento'=>6,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'Factura_Proveedor_002.pdf','tamano'=>'155 KB'],
            ['idDocumento'=>7,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'CertificadoOrigen_002.pdf','tamano'=>'88 KB'],
        ],
    ],
    'PRUEBA-003' => [
        'NumeroDeReferencia' => 'PRUEBA-003',
        'FechaApertura'      => '2024-10-01',
        'id_referencias'     => 1003,
        'id_cliente'         => 1,
        'nombre_cliente'     => 'Importaciones del Pacífico S.A. de C.V.',
        'ultimo_evento'      => [
            'Tipo'              => 'EXPORTACIÓN',
            'Descripcion'       => 'Mercancía despachada y entregada al cliente',
            'FechaHoraCapturada'=> '2024-10-22 16:45:00',
        ],
        'fechas_eventos' => [
            3  => '2024-10-05 10:00:00',
            6  => '2024-10-07 08:20:00',
            10 => '2024-10-09 15:00:00',
            15 => '2024-10-11 11:30:00',
            29 => '2024-10-15 09:45:00',
            32 => '2024-10-18 07:00:00',
            49 => '2024-10-22 16:45:00',
        ],
        'documentos' => [
            ['idDocumento'=>8, 'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'Pedimento_EXP_PRUEBA003.pdf','tamano'=>'278 KB'],
            ['idDocumento'=>9, 'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'Factura_Exportacion_003.pdf','tamano'=>'200 KB'],
            ['idDocumento'=>10,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'ListaEmpaque_EXP_003.xlsx','tamano'=>'74 KB'],
            ['idDocumento'=>11,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'ManifestacionValor_003.pdf','tamano'=>'130 KB'],
            ['idDocumento'=>12,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'PermisoSEMARNAT_003.pdf','tamano'=>'95 KB'],
        ],
    ],
    'PRUEBA-004' => [
        'NumeroDeReferencia' => 'PRUEBA-004',
        'FechaApertura'      => '2024-12-01',
        'id_referencias'     => 1004,
        'id_cliente'         => 1,
        'nombre_cliente'     => 'Importaciones del Pacífico S.A. de C.V.',
        'ultimo_evento'      => [
            'Tipo'              => 'IMPORTACIÓN',
            'Descripcion'       => 'ETA confirmada, en espera de arribo del buque',
            'FechaHoraCapturada'=> '2024-12-02 10:00:00',
        ],
        'fechas_eventos' => [
            3  => '2024-12-05 06:00:00',
            6  => null,
            10 => null,
            15 => null,
            29 => null,
            32 => null,
            49 => null,
        ],
        'documentos' => [
            ['idDocumento'=>13,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'BL_Original_PRUEBA004.pdf','tamano'=>'340 KB'],
            ['idDocumento'=>14,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'Proforma_PRUEBA004.pdf','tamano'=>'112 KB'],
        ],
    ],
    'PRUEBA-005' => [
        'NumeroDeReferencia' => 'PRUEBA-005',
        'FechaApertura'      => '2024-09-10',
        'id_referencias'     => 1005,
        'id_cliente'         => 1,
        'nombre_cliente'     => 'Importaciones del Pacífico S.A. de C.V.',
        'ultimo_evento'      => [
            'Tipo'              => 'IMPORTACIÓN',
            'Descripcion'       => 'Factura entregada al cliente, expediente cerrado',
            'FechaHoraCapturada'=> '2024-09-30 12:00:00',
        ],
        'fechas_eventos' => [
            3  => '2024-09-12 07:15:00',
            6  => '2024-09-14 10:30:00',
            10 => '2024-09-16 14:00:00',
            15 => '2024-09-18 09:00:00',
            29 => '2024-09-22 11:20:00',
            32 => '2024-09-25 08:45:00',
            49 => '2024-09-30 12:00:00',
        ],
        'documentos' => [
            ['idDocumento'=>15,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'Pedimento_PRUEBA005_final.pdf','tamano'=>'260 KB'],
            ['idDocumento'=>16,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'Factura_005.pdf','tamano'=>'175 KB'],
            ['idDocumento'=>17,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'CertAnalisis_005.pdf','tamano'=>'90 KB'],
            ['idDocumento'=>18,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'ReportePrevio_005.pdf','tamano'=>'145 KB'],
            ['idDocumento'=>19,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'DODA_005.xml','tamano'=>'22 KB'],
            ['idDocumento'=>20,'documentoCatalogo'=>'Expediente aduanal (CASAWIN)','nombreOriginal'=>'Fotos_Inspeccion_005.zip','tamano'=>'4.2 MB'],
        ],
    ],
];

// ────────────────────────────────────────────────
// MENÚ Y CATÁLOGO
// ────────────────────────────────────────────────
$menu_opciones = [
    1  => ['nombre'=>'📅 Fecha de Arriba (ETA)',           'id'=>3],
    2  => ['nombre'=>'🚢 Llegada de la mercancía',          'id'=>6],
    3  => ['nombre'=>'📋 Revalidación',                     'id'=>10],
    4  => ['nombre'=>'🔍 Fecha de Previo',                  'id'=>15],
    5  => ['nombre'=>'📜 Pedimento Pagado',                 'id'=>29],
    6  => ['nombre'=>'🚚 Despacho',                         'id'=>32],
    7  => ['nombre'=>'🧾 Entrega de factura a cliente',     'id'=>49],
    8  => ['nombre'=>'📁 Ver / Descargar Documentos',       'id'=>null],
    9  => ['nombre'=>'🔄 Validar otra referencia',          'id'=>null],
    10 => ['nombre'=>'🚪 Salir',                            'id'=>null],
];

$doc_iconos = [
    'Expediente aduanal (CASAWIN)'=>'🗄️',
    'Pedimento pagado'=>'📜','Proforma'=>'📄',
    'Factura'=>'🧾','Lista de empaque'=>'📦',
    'Cert. De analisis'=>'🔬','BL revalidado'=>'🚢',
    'Certificado de Origen'=>'🌐','DODA'=>'📃',
    'Fotos'=>'📷','Reporte de previo'=>'🔍',
    'Varios'=>'📁',
];

// ────────────────────────────────────────────────
// HELPERS UI
// ────────────────────────────────────────────────
function fmt_fecha(?string $f): string {
    if (!$f || !strtotime($f) || date('Y', strtotime($f)) <= 1900) return 'Pendiente';
    return date('d/m/Y H:i', strtotime($f));
}

function fmt_fecha_corta(?string $f): string {
    if (!$f || !strtotime($f) || date('Y', strtotime($f)) <= 1900) return 'Pendiente';
    return date('d/m/Y', strtotime($f));
}

function build_menu(array $opts, string $ref): string {
    $h  = "<div class='menu-card'>";
    $h .= "<div class='menu-header'>¿Qué deseas consultar para la referencia <strong>{$ref}</strong>?</div>";
    $h .= "<div class='menu-list'>";
    foreach ($opts as $n => $item)
        $h .= "<div class='menu-item'><span class='menu-num'>{$n}</span><span class='menu-label'>{$item['nombre']}</span></div>";
    $h .= "</div><div class='menu-hint'>Escribe el número de opción (1–" . max(array_keys($opts)) . ")</div></div>";
    return $h;
}

function build_docs_menu(array $docs, array $iconos): string {
    if (empty($docs))
        return "<div class='docs-empty'>📂 No se encontraron documentos para esta referencia.</div>";

    $docs = array_values(array_filter($docs, function ($d) {
        $cat = preg_replace('/^ANTIGUOS\s*-?>\s*/i', '', html_entity_decode($d['documentoCatalogo'] ?? ''));
        return stripos($cat, 'CASAWIN') !== false || stripos($cat, 'Expediente aduanal') !== false;
    }));

    if (empty($docs))
        return "<div class='docs-empty'>📂 No hay documentos del <strong>Expediente aduanal (CASAWIN)</strong>.</div>";

    $grupos = [];
    foreach ($docs as $doc) {
        $cat = preg_replace('/^ANTIGUOS\s*-?>\s*/i', '', html_entity_decode($doc['documentoCatalogo'] ?? 'Expediente aduanal (CASAWIN)'));
        $grupos[$cat][] = $doc;
    }
    ksort($grupos);
    $total = count($docs);

    $h = "<div class='docs-wrap'><div class='docs-header'>📁 <strong>{$total} documento(s)</strong> encontrado(s)</div>";
    foreach ($grupos as $cat => $items) {
        $icono = $iconos[$cat] ?? '📁';
        $h .= "<div class='doc-group'><div class='doc-group-title'>{$icono} " . htmlspecialchars($cat) . " <span class='doc-count'>" . count($items) . "</span></div>";
        foreach ($items as $doc) {
            $docId  = $doc['idDocumento'] ?? null;
            $nombre = $doc['nombreOriginal'] ?? "Doc #{$docId}";
            $tamano = $doc['tamano'] ?? '';
            $ext    = strtoupper(pathinfo($nombre, PATHINFO_EXTENSION));
            $ec     = ['PDF'=>'#e74c3c','XLSX'=>'#27ae60','XLS'=>'#27ae60','DOCX'=>'#2980b9','DOC'=>'#2980b9','JPG'=>'#e67e22','JPEG'=>'#e67e22','PNG'=>'#e67e22','ZIP'=>'#8e44ad','XML'=>'#16a085','TXT'=>'#7f8c8d'][$ext] ?? '#7f8c8d';
            $h .= "<div class='doc-item'>";
            $h .= "<div class='doc-item-info'><span class='doc-name' title='" . htmlspecialchars($nombre) . "'>" . htmlspecialchars($nombre) . "</span>";
            $h .= "<span class='doc-meta'>";
            if ($ext)    $h .= "<span class='doc-ext' style='background:{$ec}'>{$ext}</span>";
            if ($tamano) $h .= "<span>📦 {$tamano}</span>";
            $h .= "</span></div>";
            // En DEMO: botón deshabilitado con tooltip
            $h .= "<button class='btn-dl btn-dl-demo' onclick=\"alert('⚠️ Descarga no disponible en modo DEMO.')\" title='No disponible en DEMO'>⬇️ Descargar</button>";
            $h .= "</div>";
        }
        $h .= "</div>";
    }
    $h .= "<div class='docs-back'>Escribe <strong>0</strong> para volver al menú principal</div></div>";
    return $h;
}

// ────────────────────────────────────────────────
// INICIALIZAR SESIÓN
// ────────────────────────────────────────────────
if (!isset($_SESSION['chat_history'])) {
    $_SESSION['chat_history']  = [['bot'=>true,'message'=>'👋 ¡Bienvenido al sistema <strong>DEMO</strong> de <strong>Grupo ISCE</strong>!<br>Por favor ingresa tu <strong>usuario</strong> para comenzar.<br><small style="color:#e67e22">⚠️ Modo demostración – datos ficticios</small>']];
    $_SESSION['estado_chat']   = 'esperando_usuario';
}
if (!isset($_SESSION['usuario_autenticado'])) $_SESSION['usuario_autenticado'] = null;

// Limpiar sesión
if (isset($_GET['limpiar'])) { session_destroy(); header('Location: ' . $_SERVER['PHP_SELF']); exit; }

// ────────────────────────────────────────────────
// PROCESAR MENSAJE
// ────────────────────────────────────────────────
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message'])) {
    $msg = trim($_POST['message']);

    if (!empty($msg)) {
        // Mostrar burbuja del usuario (ocultar contraseña)
        $_SESSION['chat_history'][] = [
            'bot'     => false,
            'message' => $_SESSION['estado_chat'] === 'esperando_contrasena'
                ? str_repeat('•', min(12, strlen($msg) + rand(0, 3)))
                : htmlspecialchars($msg),
        ];

        $estado = $_SESSION['estado_chat'] ?? '';

        // ── ESPERANDO USUARIO ──
        if ($estado === 'esperando_usuario') {
            $u = $DEMO_USUARIOS[$msg] ?? null;
            if ($u && $u['activo']) {
                $_SESSION['usuario_temporal'] = $u;
                $_SESSION['estado_chat']      = 'esperando_contrasena';
                $_SESSION['chat_history'][]   = ['bot'=>true,'message'=>'🔐 Usuario verificado. Ingresa tu <strong>contraseña</strong>.'];
            } else {
                $_SESSION['chat_history'][] = ['bot'=>true,'message'=>'❌ Usuario no encontrado o cuenta desactivada.<br><small>Usa: <strong>demo</strong></small>'];
            }
        }

        // ── ESPERANDO CONTRASEÑA ──
        elseif ($estado === 'esperando_contrasena') {
            $u = $_SESSION['usuario_temporal'] ?? null;
            if ($u && password_verify($msg, $u['contrasena'])) {
                $_SESSION['usuario_autenticado'] = $u;
                unset($_SESSION['usuario_temporal']);
                $_SESSION['estado_chat']    = 'esperando_referencia';
                $_SESSION['chat_history'][] = ['bot'=>true,'message'=>'✅ ¡Bienvenido, <strong>' . htmlspecialchars($u['nombre_cliente']) . '</strong>!<br><br>📊 Ingresa el <strong>número de referencia</strong> que deseas consultar.<br><small style="color:#888">Referencias disponibles: PRUEBA-001 al PRUEBA-005</small>'];
            } else {
                $_SESSION['chat_history'][] = ['bot'=>true,'message'=>'❌ Contraseña incorrecta. Intenta de nuevo.<br><small>Usa: <strong>demo1234</strong></small>'];
            }
        }

        // ── ESPERANDO REFERENCIA ──
        elseif ($estado === 'esperando_referencia') {
            $u   = $_SESSION['usuario_autenticado'];
            $ref = $DEMO_REFERENCIAS[strtoupper(trim($msg))] ?? null;

            if (!$ref) {
                $_SESSION['chat_history'][] = ['bot'=>true,'message'=>'❌ <strong>Referencia no encontrada.</strong><br><small>Disponibles: PRUEBA-001, PRUEBA-002, PRUEBA-003, PRUEBA-004, PRUEBA-005</small>'];
            } else {
                $admin = (int)($u['es_admin'] ?? 0);
                if ($admin !== 1 && (int)$ref['id_cliente'] !== (int)$u['id_cliente']) {
                    $_SESSION['chat_history'][] = ['bot'=>true,'message'=>'⚠️ Esta referencia no está asociada a tu cuenta.'];
                } else {
                    $_SESSION['referencia_actual'] = $ref;
                    $fecha  = fmt_fecha_corta($ref['FechaApertura']);
                    $ab     = $admin === 1 ? '<span class="admin-badge">👑 Admin</span>' : '';

                    $_SESSION['chat_history'][] = ['bot'=>true,'message'=>
                        "<div class='ref-card'>
                          <div class='ref-card-title'>✅ Referencia verificada {$ab}</div>
                          <div class='ref-card-row'><span class='ref-label'>Número</span><span class='ref-value'>{$ref['NumeroDeReferencia']}</span></div>
                          <div class='ref-card-row'><span class='ref-label'>Fecha apertura</span><span class='ref-value'>{$fecha}</span></div>
                          <div class='ref-card-row'><span class='ref-label'>Cliente</span><span class='ref-value'>{$ref['nombre_cliente']}</span></div>
                        </div>"
                    ];

                    // Último evento
                    $ev   = $ref['ultimo_evento'];
                    $tipo = $ev['Tipo'];
                    $_SESSION['ultimo_tipo'] = $tipo;
                    $fev  = fmt_fecha($ev['FechaHoraCapturada']);

                    $_SESSION['chat_history'][] = ['bot'=>true,'message'=>
                        "<div class='event-card'>
                          <div class='event-card-title'>🕐 Último evento registrado</div>
                          <div class='ref-card-row'><span class='ref-label'>Tipo</span><span class='ref-value'>{$tipo}</span></div>
                          <div class='ref-card-row'><span class='ref-label'>Fecha y hora</span><span class='ref-value'>{$fev}</span></div>
                          <div class='ref-card-row'><span class='ref-label'>Descripción</span><span class='ref-value'>" . htmlspecialchars($ev['Descripcion']) . "</span></div>
                        </div>"
                    ];

                    // Guardar fechas de eventos
                    $fe = [];
                    foreach ($ref['fechas_eventos'] as $idEvento => $fechaEvento) {
                        $fe[$idEvento] = $fechaEvento ? fmt_fecha($fechaEvento) : 'Pendiente';
                    }
                    $_SESSION['fechas_eventos'] = $fe;

                    $_SESSION['chat_history'][] = ['bot'=>true,'message'=> build_menu($menu_opciones, $ref['NumeroDeReferencia'])];
                    $_SESSION['estado_chat']    = 'menu_eventos';
                }
            }
        }

        // ── MENÚ EVENTOS ──
        elseif ($estado === 'menu_eventos') {
            $op   = (int)trim($msg);
            $ref  = $_SESSION['referencia_actual'] ?? null;
            $fe   = $_SESSION['fechas_eventos']    ?? [];
            $tipo = $_SESSION['ultimo_tipo']        ?? 'IMPORTACIÓN';

            if ($op === 10) {
                $n = $_SESSION['usuario_autenticado']['nombre_cliente'] ?? '';
                $_SESSION['chat_history'][] = ['bot'=>true,'message'=>"👋 ¡Hasta luego, <strong>{$n}</strong>! Gracias por usar Grupo ISCE."];
                session_destroy();
                header('Location: ' . $_SERVER['PHP_SELF']);
                exit;

            } elseif ($op === 9) {
                unset($_SESSION['referencia_actual'], $_SESSION['fechas_eventos'], $_SESSION['ultimo_tipo'], $_SESSION['docs_referencia']);
                $_SESSION['estado_chat']    = 'esperando_referencia';
                $_SESSION['chat_history'][] = ['bot'=>true,'message'=>'📊 Ingresa el <strong>número de referencia</strong> que deseas consultar.<br><small style="color:#888">Disponibles: PRUEBA-001 al PRUEBA-005</small>'];
                header('Location: ' . $_SERVER['PHP_SELF']);
                exit;

            } elseif ($op === 8) {
                $docs = $ref['documentos'] ?? [];
                $_SESSION['docs_referencia'] = $docs;
                $_SESSION['estado_chat']     = 'viendo_documentos';
                $_SESSION['chat_history'][]  = ['bot'=>true,'message'=> build_docs_menu($docs, $doc_iconos)];

            } elseif (isset($menu_opciones[$op]) && $op >= 1 && $op <= 7) {
                $item  = $menu_opciones[$op];
                $fecha = $fe[$item['id']] ?? 'Pendiente';
                $_SESSION['chat_history'][] = ['bot'=>true,'message'=>
                    "<div class='event-card'>
                      <div class='event-card-title'>{$item['nombre']}</div>
                      <div class='ref-card-row'><span class='ref-label'>Cliente</span><span class='ref-value'>" . ($ref['nombre_cliente'] ?? 'N/A') . "</span></div>
                      <div class='ref-card-row'><span class='ref-label'>Tipo</span><span class='ref-value'>{$tipo}</span></div>
                      <div class='ref-card-row'><span class='ref-label'>Fecha y hora</span><span class='ref-value'><strong>{$fecha}</strong></span></div>
                    </div>"
                ];
                $_SESSION['chat_history'][] = ['bot'=>true,'message'=> build_menu($menu_opciones, $ref['NumeroDeReferencia'] ?? 'N/A')];

            } else {
                $_SESSION['chat_history'][] = ['bot'=>true,'message'=>'❌ Opción inválida. Escribe un número del 1 al 10.'];
                $_SESSION['chat_history'][] = ['bot'=>true,'message'=> build_menu($menu_opciones, $ref['NumeroDeReferencia'] ?? 'N/A')];
            }
        }

        // ── VIENDO DOCUMENTOS ──
        elseif ($estado === 'viendo_documentos') {
            $ref = $_SESSION['referencia_actual'] ?? null;
            if ((int)trim($msg) === 0) {
                $_SESSION['estado_chat']    = 'menu_eventos';
                $_SESSION['chat_history'][] = ['bot'=>true,'message'=> build_menu($menu_opciones, $ref['NumeroDeReferencia'] ?? 'N/A')];
            } else {
                $_SESSION['chat_history'][] = ['bot'=>true,'message'=>'↩️ Escribe <strong>0</strong> para volver al menú principal.<br><small>Las descargas no están disponibles en modo DEMO.</small>'];
            }
        }
    }

    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title>DEMO – Grupo ISCE – Consulta de Referencias</title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&family=DM+Serif+Display&display=swap" rel="stylesheet">
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<style>
:root{
  --navy:#1a2d4f;--navy-deep:#0f1e35;--blue:#2455a4;--blue-mid:#2e6bc4;--blue-light:#4a90d9;
  --accent:#3b9ede;--white:#fff;--off:#f4f7fb;--border:#dce5f0;
  --text:#1a2d4f;--soft:#5a6d87;--success:#1a9e6f;--demo:#e67e22;--radius:14px;
  --shadow:0 4px 24px rgba(26,45,79,.13);--shadow-sm:0 2px 8px rgba(26,45,79,.09);
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html,body{height:100%;overflow:hidden}
body{font-family:'DM Sans',sans-serif;background:var(--navy-deep);display:flex;align-items:center;justify-content:center}
body::before{content:'';position:fixed;inset:0;background:radial-gradient(ellipse 80% 60% at 15% 10%,rgba(36,85,164,.4) 0%,transparent 60%),radial-gradient(ellipse 60% 50% at 85% 90%,rgba(59,158,222,.22) 0%,transparent 55%);pointer-events:none}

.shell{width:100%;max-width:760px;height:100vh;height:100dvh;display:flex;flex-direction:column;position:relative;z-index:1}

/* Header */
.chat-header{background:linear-gradient(135deg,var(--navy-deep) 0%,var(--navy) 100%);padding:14px 22px;display:flex;align-items:center;gap:14px;border-bottom:1px solid rgba(255,255,255,.07);flex-shrink:0;box-shadow:0 2px 20px rgba(0,0,0,.35)}
.logo-wrap img{height:48px;width:auto;object-fit:contain;filter:brightness(1.15)}
.header-text{flex:1;min-width:0}
.header-title{font-family:'DM Serif Display',serif;font-size:1.1rem;color:#fff;line-height:1.2;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.header-sub{font-size:.72rem;color:rgba(255,255,255,.5);margin-top:2px}

/* Badge DEMO */
.demo-badge{display:flex;align-items:center;gap:5px;background:rgba(230,126,34,.18);border:1.5px solid rgba(230,126,34,.55);border-radius:20px;padding:4px 11px;font-size:.7rem;color:#f0a05a;font-weight:700;white-space:nowrap;flex-shrink:0;animation:demoPulse 2.5s infinite}
@keyframes demoPulse{0%,100%{border-color:rgba(230,126,34,.55)}50%{border-color:rgba(230,126,34,1)}}
.demo-dot{width:7px;height:7px;background:var(--demo);border-radius:50%}

/* Banner DEMO */
.demo-banner{background:linear-gradient(90deg,rgba(230,126,34,.15),rgba(230,126,34,.08));border-bottom:1px solid rgba(230,126,34,.25);padding:6px 20px;font-size:.73rem;color:#f0a05a;text-align:center;flex-shrink:0;letter-spacing:.2px}

/* Messages */
.chat-messages{flex:1;overflow-y:auto;padding:20px 18px;background:var(--off);display:flex;flex-direction:column;gap:14px;scroll-behavior:smooth;overscroll-behavior:contain}
.chat-messages::-webkit-scrollbar{width:4px}
.chat-messages::-webkit-scrollbar-thumb{background:var(--border);border-radius:10px}

.message-row{display:flex;align-items:flex-end;gap:9px;max-width:90%;animation:fadeUp .22s ease both}
@keyframes fadeUp{from{opacity:0;transform:translateY(7px)}to{opacity:1;transform:none}}
.bot-row{align-self:flex-start}
.user-row{align-self:flex-end;flex-direction:row-reverse}

.avatar{flex-shrink:0;display:flex;align-items:center;justify-content:center}
.avatar-bot{width:58px;height:58px;background:transparent}
.avatar-bot lottie-player{width:100%;height:100%}
.avatar-user{width:34px;height:34px;border-radius:50%;background:var(--navy);font-size:.75rem;font-weight:700;color:#fff;box-shadow:var(--shadow-sm)}

.bubble{padding:10px 15px;border-radius:18px;font-size:.875rem;line-height:1.65;word-break:break-word;white-space:normal;box-shadow:var(--shadow-sm);max-width:100%}
.bot-bubble{background:#fff;color:var(--text);border-bottom-left-radius:5px;border:1px solid var(--border)}
.user-bubble{background:var(--navy);color:#fff;border-bottom-right-radius:5px}

/* Cards */
.ref-card,.event-card{background:#f0f5ff;border:1.5px solid #c8d9f5;border-radius:11px;overflow:hidden;margin-top:2px}
.ref-card-title,.event-card-title{background:linear-gradient(135deg,var(--blue),var(--blue-mid));color:#fff;padding:8px 13px;font-size:.8rem;font-weight:700;letter-spacing:.2px}
.event-card{border-color:#bde0ff}
.event-card-title{background:linear-gradient(135deg,#1a6eb0,#2e9fd4)}
.ref-card-row{display:flex;padding:7px 13px;border-bottom:1px solid #dce9fb;font-size:.82rem}
.ref-card-row:last-child{border-bottom:none}
.ref-label{color:var(--soft);width:120px;flex-shrink:0;font-weight:500}
.ref-value{color:var(--text);font-weight:600}
.admin-badge{display:inline-block;background:rgba(255,255,255,.2);border-radius:20px;padding:1px 8px;font-size:.68rem;margin-left:6px}

/* Menu */
.menu-card{background:#f8fbff;border:1.5px solid #c8d9f5;border-radius:11px;overflow:hidden}
.menu-header{background:linear-gradient(135deg,var(--navy),var(--blue));color:#fff;padding:9px 13px;font-size:.82rem;font-weight:600}
.menu-list{padding:5px 7px}
.menu-item{display:flex;align-items:center;gap:9px;padding:7px 8px;border-radius:8px;transition:background .15s}
.menu-item:hover{background:#eaf1fc}
.menu-num{width:25px;height:25px;background:var(--blue);color:#fff;border-radius:50%;display:flex;align-items:center;justify-content:center;font-size:.72rem;font-weight:700;flex-shrink:0}
.menu-label{font-size:.85rem;color:var(--text);font-weight:500}
.menu-hint{padding:7px 13px;font-size:.73rem;color:var(--soft);border-top:1px solid var(--border);background:#f0f5ff}

/* Docs */
.docs-wrap{font-size:.86rem}
.docs-header{background:linear-gradient(135deg,var(--navy),var(--blue));color:#fff;padding:9px 13px;border-radius:10px 10px 0 0;font-weight:600}
.docs-empty{color:var(--soft);font-size:.86rem;padding:6px 0}
.doc-group{border:1.5px solid var(--border);border-radius:9px;overflow:hidden;margin-top:7px}
.doc-group-title{background:#eef3fb;padding:7px 11px;font-size:.78rem;font-weight:700;color:var(--blue);border-bottom:1px solid var(--border);display:flex;align-items:center;gap:5px}
.doc-count{background:var(--blue);color:#fff;border-radius:20px;padding:1px 7px;font-size:.66rem;margin-left:3px}
.doc-item{display:flex;align-items:center;justify-content:space-between;padding:7px 11px;gap:8px;border-bottom:1px solid #f0f4fb;flex-wrap:wrap}
.doc-item:last-child{border-bottom:none}
.doc-item:hover{background:#f8fbff}
.doc-item-info{flex:1;min-width:0}
.doc-name{display:block;font-weight:600;font-size:.8rem;color:var(--text);white-space:nowrap;overflow:hidden;text-overflow:ellipsis;max-width:260px}
.doc-meta{display:flex;align-items:center;gap:5px;margin-top:2px;font-size:.7rem;color:var(--soft)}
.doc-ext{color:#fff;border-radius:3px;padding:1px 5px;font-size:.63rem;font-weight:700}
.btn-dl{display:inline-flex;align-items:center;gap:3px;background:var(--success);color:#fff;border:none;border-radius:20px;padding:5px 12px;font-size:.74rem;font-weight:700;cursor:pointer;text-decoration:none;white-space:nowrap;flex-shrink:0;transition:opacity .2s,transform .1s;box-shadow:0 2px 6px rgba(26,158,111,.28)}
.btn-dl:hover{opacity:.87;transform:scale(.97)}
/* Botón demo deshabilitado */
.btn-dl-demo{background:#aaa !important;box-shadow:none !important;cursor:not-allowed !important}
.btn-dl-demo:hover{opacity:.75 !important;transform:none !important}
.docs-back{margin-top:9px;padding:7px 11px;background:#f0f5ff;border-radius:8px;font-size:.76rem;color:var(--soft);border:1px solid var(--border)}

/* Input */
.chat-input-wrap{background:#fff;border-top:1px solid var(--border);padding:12px 15px;display:flex;gap:9px;align-items:center;flex-shrink:0;box-shadow:0 -2px 12px rgba(26,45,79,.07)}
.chat-input-wrap input{flex:1;padding:11px 17px;border:1.5px solid var(--border);border-radius:25px;font-size:.9rem;font-family:'DM Sans',sans-serif;color:var(--text);background:var(--off);outline:none;transition:border-color .2s,box-shadow .2s;min-width:0}
.chat-input-wrap input:focus{border-color:var(--blue-mid);background:#fff;box-shadow:0 0 0 3px rgba(46,107,196,.1)}
.btn-send{width:44px;height:44px;background:linear-gradient(135deg,var(--blue),var(--blue-light));color:#fff;border:none;border-radius:50%;display:flex;align-items:center;justify-content:center;cursor:pointer;flex-shrink:0;box-shadow:0 3px 10px rgba(36,85,164,.38);transition:transform .15s,opacity .15s;font-size:1rem}
.btn-send:hover{transform:scale(1.07)}
.btn-send:active{transform:scale(.94)}

/* Footer */
.chat-footer{background:#fff;border-top:1px solid var(--border);display:flex;justify-content:center;gap:10px;padding:7px 14px;flex-shrink:0}
.footer-link{font-size:.7rem;color:var(--soft);text-decoration:none;padding:4px 12px;border-radius:20px;border:1px solid var(--border);transition:background .15s;cursor:pointer;background:none;font-family:'DM Sans',sans-serif}
.footer-link:hover{background:var(--off);color:var(--blue)}

@media(max-width:600px){
  .shell{border-radius:0}
  .chat-header{padding:11px 14px;gap:10px}
  .logo-wrap img{height:40px}
  .header-title{font-size:1rem}
  .demo-badge{padding:3px 9px;font-size:.66rem}
  .chat-messages{padding:14px 11px;gap:11px}
  .message-row{max-width:97%}
  .bubble{font-size:.84rem;padding:9px 12px}
  .ref-label{width:100px;font-size:.78rem}
  .ref-value{font-size:.78rem}
  .doc-name{max-width:180px}
  .menu-label{font-size:.81rem}
  .chat-input-wrap{padding:9px 11px;gap:7px}
  .chat-input-wrap input{padding:10px 13px;font-size:.86rem}
  .btn-send{width:40px;height:40px;font-size:.9rem}
}
@media(max-width:380px){
  .doc-name{max-width:130px}
  .btn-dl{padding:4px 9px;font-size:.68rem}
  .ref-label{width:85px}
}
</style>
</head>
<body>
<div class="shell">

  <!-- HEADER -->
  <div class="chat-header">
    <div class="logo-wrap"><img src="logo.png" alt="Grupo ISCE" onerror="this.style.display='none'"></div>
    <div class="header-text">
      <div class="header-title">DEMO – Consulta de Referencias</div>
      <div class="header-sub">Sistema de seguimiento aduanal · Modo demostración</div>
    </div>
    <div class="demo-badge"><span class="demo-dot"></span>DEMO</div>
  </div>

  <!-- BANNER DEMO -->
  <div class="demo-banner">
    ⚠️ <strong>MODO DEMO</strong> — Sin conexión a bases de datos. Todos los datos son ficticios.
    &nbsp;|&nbsp; Usuario: <strong>demo</strong> &nbsp;/&nbsp; Contraseña: <strong>demo1234</strong>
  </div>

  <!-- MENSAJES -->
  <div class="chat-messages" id="chatMessages">
    <?php
    $initials = '';
    if (!empty($_SESSION['usuario_autenticado']['nombre_cliente'])) {
        $parts    = explode(' ', trim($_SESSION['usuario_autenticado']['nombre_cliente']));
        $initials = strtoupper(substr($parts[0], 0, 1) . (isset($parts[1]) ? substr($parts[1], 0, 1) : ''));
    }
    foreach ($_SESSION['chat_history'] ?? [] as $m):
    ?>
      <div class="message-row <?= $m['bot'] ? 'bot-row' : 'user-row' ?>">
        <?php if ($m['bot']): ?>
          <div class="avatar avatar-bot">
            <lottie-player src="robot.json" background="transparent" speed="1" loop autoplay></lottie-player>
          </div>
        <?php else: ?>
          <div class="avatar avatar-user"><?= $initials ?: '👤' ?></div>
        <?php endif; ?>
        <div class="bubble <?= $m['bot'] ? 'bot-bubble' : 'user-bubble' ?>"><?= $m['message'] ?></div>
      </div>
    <?php endforeach; ?>
  </div>

  <!-- INPUT -->
  <form class="chat-input-wrap" method="POST" id="chatForm">
    <input
      type="<?= ($_SESSION['estado_chat'] ?? '') === 'esperando_contrasena' ? 'password' : 'text' ?>"
      name="message" id="userInput"
      placeholder="<?php
        $e = $_SESSION['estado_chat'] ?? '';
        if ($e === 'esperando_usuario')        echo 'Ingresa tu usuario...';
        elseif ($e === 'esperando_contrasena') echo 'Ingresa tu contraseña...';
        elseif ($e === 'esperando_referencia') echo 'Ej: PRUEBA-001';
        elseif ($e === 'viendo_documentos')    echo 'Escribe 0 para volver...';
        else                                   echo 'Escribe el número de opción...';
      ?>"
      autocomplete="off" required autofocus>
    <button type="submit" class="btn-send">➤</button>
  </form>

  <!-- FOOTER -->
  <div class="chat-footer">
    <?php if (!empty($_SESSION['usuario_autenticado'])): ?>
      <a href="?limpiar=1" class="footer-link">🚪 Cerrar Sesión</a>
    <?php else: ?>
      <a href="?limpiar=1" class="footer-link">🔄 Reiniciar</a>
    <?php endif; ?>
    <span class="footer-link">🧪 Modo Demo</span>
    <span class="footer-link">🔒 Sin datos reales</span>
  </div>

</div>
<script>
  const cm = document.getElementById('chatMessages');
  if (cm) cm.scrollTop = cm.scrollHeight;
  document.getElementById('userInput')?.focus();
</script>
</body>
</html>
