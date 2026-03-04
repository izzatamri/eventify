/**
 * Eventify Design System - Interactions
 * Ripple effect, toasts, and animated feedback. Respects prefers-reduced-motion.
 */
(function ($) {
  'use strict';

  var prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  /* ---------- Ripple effect ---------- */
  function createRipple(e, el) {
    if (prefersReducedMotion) return;
    var $el = $(el);
    if ($el.hasClass('ef-ripple') || $el.find('.ef-ripple-circle').length) return;
    $el.addClass('ef-ripple');
    var rect = el.getBoundingClientRect();
    var size = Math.max(rect.width, rect.height);
    var x = e.clientX - rect.left - size / 2;
    var y = e.clientY - rect.top - size / 2;
    var ripple = $('<span class="ef-ripple-circle"></span>').css({
      width: size,
      height: size,
      left: x,
      top: y,
      position: 'absolute',
      borderRadius: '50%',
      background: 'rgba(255,255,255,0.4)',
      pointerEvents: 'none',
      transform: 'scale(0)',
      animation: 'ef-ripple-expand 0.5s ease-out forwards'
    });
    $el.append(ripple);
    setTimeout(function () { ripple.remove(); }, 520);
  }

  $(document).on('click', '.event-create-page .vl-btn4, .event-create-page .save-btn, .event-create-page .add-more-tickets-btn, .event-create-page .section-add, .event-create-page a.preview-btn', function (e) {
    var btn = this;
    if (btn.tagName === 'BUTTON' || btn.tagName === 'A') createRipple(e, btn);
  });

  /* ---------- Toast container & API ---------- */
  function ensureToastContainer() {
    var id = 'ef-toast-container';
    if (!document.getElementById(id)) {
      var div = document.createElement('div');
      div.id = id;
      div.className = 'ef-toast-container';
      div.setAttribute('aria-live', 'polite');
      div.setAttribute('aria-atomic', 'true');
      document.body.appendChild(div);
    }
    return document.getElementById(id);
  }

  function showToast(message, type) {
    type = type || 'success';
    var container = ensureToastContainer();
    var icon = type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-exclamation-circle' : 'fa-info-circle';
    var toast = document.createElement('div');
    toast.className = 'ef-toast ef-toast-' + type;
    toast.setAttribute('role', 'alert');
    toast.innerHTML =
      '<span class="ef-toast-icon fa-solid ' + icon + '" aria-hidden="true"></span>' +
      '<span class="ef-toast-message">' + escapeHtml(message) + '</span>';
    container.appendChild(toast);
    var duration = 4000;
    var start = Date.now();
    var progress = document.createElement('div');
    progress.className = 'ef-toast-progress';
    progress.style.width = '100%';
    toast.appendChild(progress);
    var raf = function () {
      var elapsed = Date.now() - start;
      progress.style.transform = 'scaleX(' + Math.max(0, 1 - elapsed / duration) + ')';
      if (elapsed < duration) requestAnimationFrame(raf);
      else {
        toast.style.animation = 'ef-fadeIn 0.2s ease-out reverse';
        setTimeout(function () { toast.remove(); }, 220);
      }
    };
    requestAnimationFrame(raf);
    setTimeout(function () {
      toast.style.animation = 'ef-fadeIn 0.2s ease-out reverse';
      setTimeout(function () { if (toast.parentNode) toast.remove(); }, 220);
    }, duration);
  }

  function escapeHtml(s) {
    var div = document.createElement('div');
    div.textContent = s;
    return div.innerHTML;
  }

  /* Convert Bootstrap alerts in .event-create-page to toasts and remove from DOM */
  function promoteAlertsToToasts() {
    $('.event-create-page .alert-dismissible, .event-create-page .alert-success, .event-create-page .alert-danger').each(function () {
      var $a = $(this);
      var msg = $a.find('.alert-message').text() || $a.clone().children().remove().end().text().trim();
      var type = $a.hasClass('alert-danger') ? 'error' : 'success';
      if (msg) showToast(msg, type);
      $a.remove();
    });
  }

  /* Show flash messages as toasts when container exists */
  $(document).ready(function () {
    var $flash = $('.event-create-page .alert-success, .event-create-page .alert-danger');
    if ($flash.length) {
      $flash.each(function () {
        var msg = $(this).clone().children('button').remove().end().text().trim();
        var type = $(this).hasClass('alert-danger') ? 'error' : 'success';
        if (msg) showToast(msg, type);
      });
      $flash.remove();
    }
  });

  /* Form validation: shake on first invalid */
  $(document).on('submit', '.event-create-page form', function () {
    if (prefersReducedMotion) return;
    var $invalid = $(this).find('.form-control.is-invalid').first();
    if ($invalid.length) {
      $invalid.addClass('ef-shake');
      $invalid[0].scrollIntoView({ behavior: 'smooth', block: 'center' });
      setTimeout(function () { $invalid.removeClass('ef-shake'); }, 520);
    }
  });

  /* Submit button loading state (including buttons with form="id" outside the form) */
  $(document).on('submit', '.event-create-page form', function () {
    var form = this;
    var formId = form.id;
    var $form = $(form);
    var $btn = $form.find('button[type="submit"]').first();
    if (!$btn.length && formId) $btn = $('button[type="submit"][form="' + formId + '"]').first();
    if ($btn.length && !$form.find('.form-control.is-invalid').length) {
      $btn.addClass('ef-btn-loading').prop('disabled', true);
    }
  });

  /* Upload zone drag-over feedback */
  $(document).on('dragenter dragover', '.event-create-page .upload-zone', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).addClass('dragover');
  });
  $(document).on('dragleave drop', '.event-create-page .upload-zone', function (e) {
    e.preventDefault();
    e.stopPropagation();
    $(this).removeClass('dragover');
  });

  /* Ripple keyframe (inject once) */
  if (!document.getElementById('ef-ripple-style')) {
    var style = document.createElement('style');
    style.id = 'ef-ripple-style';
    style.textContent = '@keyframes ef-ripple-expand{to{transform:scale(2);opacity:0;}}';
    document.head.appendChild(style);
  }

  window.EventifyDesign = { showToast: showToast };
})(jQuery);
