<!-- Container for popup -->
<div id="popup-wrapper" style="display: none;"></div>
<!-- Hidden Preload Container -->
<div id="vendasta-preload" style="display: none;">
  <div id="vendasta-popup-content"></div>
</div>

<script>
  // alert("4");
  // Load the widget in the hidden div when the page loads
  window.addEventListener("DOMContentLoaded", () => {
    const script = document.createElement('script');
    script.id = '__v_snapshot_widget';
    script.src = 'https://www.cdnstyles.com/static/snapshot_widget/v1/snapshot.widget.js';
    script.setAttribute('data', 'eyJhcGlLZXkiOiJkZWY5MTk5Zi0wOThhLTRiMDctYmViYy01MGFkYjZjZWM0YzUiLCJiYWNrZ3JvdW5kQ29sb3IiOiIjRkZGRkZGIiwiYm9yZGVyQ29sb3IiOiIjRkZGRkZGIiwiYm9yZGVyUmFkaXVzIjowLCJidXR0b25Db2xvciI6IiMyMjIyMjIiLCJidXR0b25Gb250Q29sb3IiOiIjRkZGRkZGIiwiYnV0dG9uVGV4dCI6IkdldCBNeSBGcmVlIEFjY291bnQhIiwiY29uZmlybWF0aW9uQm9keVRleHQiOiJPbmNlIGl0J3MgcmVhZHksIHdlJ2xsIHNlbmQgYW4gZW1haWwgdG8gdGhlIGFkZHJlc3MgeW91IGhhdmUgcHJvdmlkZWQuIiwiY29uZmlybWF0aW9uVGl0bGVUZXh0IjoiV2UncmUgZ2VuZXJhdGluZyB5b3VyIGFjY291bnQhIiwiY29uc2VudEluZm9ybWF0aW9uVGV4dCI6IiIsImRhdGFQcm90ZWN0aW9uUG9saWN5VGV4dCI6IiIsImRyb3BTaGFkb3ciOnRydWUsImVtYWlsTm90aWZpY2F0aW9uQWdyZWVtZW50VGV4dCI6IiIsInBhcnRuZXJJZCI6IkZCS0wiLCJwcmltYXJ5Rm9udENvbG9yIjoiIzIyMjIyMiIsInNlY29uZGFyeUZvbnRDb2xvciI6IiM5QjlCOUIiLCJ0aXRsZVRleHQiOiJIb3cgaXMgbXkgYnVzaW5lc3MgcGVyZm9ybWluZyBvbmxpbmU/IiwidXJsIjoiaHR0cHM6Ly9zbmFwc2hvdC13aWRnZXQtcHJvZC5hcGlnYXRld2F5LmNvLyIsIndpZGdldElkIjoiU05BUFNIT1QtV0lER0VULWM3NDcwYjI3LTM3YmYtNDRiNS05N2ExLWQyMWJhNDM2OWFlMyIsIndpZHRoIjowfQ==');
    document.getElementById('vendasta-popup-content').appendChild(script);
  });
</script>
<!-- Container for popup -->
<div id="popup-wrapper" style="display: none;"></div>

<script>
function openFormPopup() {
  const wrapper = document.getElementById('popup-wrapper');
  const content = document.getElementById('vendasta-popup-content');

  // Show popup with preloaded content
  wrapper.innerHTML = `
    <div style="position: fixed; top: 0; left: 0; width: 100%; height: 100%;
                background: rgba(0,0,0,0.6); display: flex; align-items: center; justify-content: center;
                z-index: 9999;">
      <div style="background: white; padding: 20px; border-radius: 8px; max-width: 90vw; max-height: 90vh; overflow: auto; position: relative;">
        <button onclick="closeFormPopup()" style="position:absolute;top:-4px;right:6px;color: var(--primary); font-size:25px; cursor:pointer;">
          <i class='fa-solid fa-xmark'></i>
        </button>
        <div id="popup-content"></div>
      </div>
    </div>
  `;
  wrapper.style.display = 'block';

  // Move preloaded content into popup-content
  document.getElementById('popup-content').appendChild(content);
}

function closeFormPopup() {
  const wrapper = document.getElementById('popup-wrapper');
  const content = document.getElementById('vendasta-popup-content');
  wrapper.style.display = 'none';

  // Move content back to hidden preload container
  document.getElementById('vendasta-preload').appendChild(content);
  wrapper.innerHTML = '';
}
</script>

