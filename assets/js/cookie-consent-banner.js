

function showCookieConsentOptions() {
  var x = document.getElementById("cookie-consent-toggle");
  var y = document.getElementById("cookie-consent-options");
  
    x.style.display = "block";
    y.style.display = "none";
  
}

  function hideBanner() {
    document.getElementById('cookie-consent-banner').style.display = 'none';
  }

  if(localStorage.getItem('consentMode') === null) {
    
    document.getElementById('btn-accept-all').addEventListener('click', function() {
      setConsent({
        necessary: true,
        analytics: true,
        preferences: true,
        marketing: true
      });
      hideBanner();
    });
    document.getElementById('btn-accept-all-toggle').addEventListener('click', function() {
      setConsent({
        necessary: true,
        analytics: true,
        preferences: true,
        marketing: true
      });
      hideBanner();
    });
    document.getElementById('btn-accept-some').addEventListener('click', function() {
      setConsent({
        necessary: true,
        analytics: document.getElementById('consent-analytics').checked,
        preferences: document.getElementById('consent-preferences').checked,
        marketing: document.getElementById('consent-marketing').checked
      });
      hideBanner();
    });
    document.getElementById('btn-reject-all').addEventListener('click', function() {
      setConsent({
        necessary: true,
        analytics: false,
        preferences: false,
        marketing: false
      });
      hideBanner();
    });
    document.getElementById('cookie-consent-banner').style.display = 'block';
  }
  
  function setConsent(consent) {
    const consentMode = {
      'functionality_storage': consent.necessary ? 'granted' : 'denied',
      'security_storage': consent.necessary ? 'granted' : 'denied',
      'ad_storage': consent.marketing ? 'granted' : 'denied',
      'ad_user_data': consent.marketing ? 'granted' : 'denied',
      'ad_personalization': consent.marketing ? 'granted' : 'denied',
      'analytics_storage': consent.analytics ? 'granted' : 'denied',
      'personalization_storage': consent.preferences ? 'granted' : 'denied',
      'personalization': consent.preferences ? 'granted' : 'denied',
    };
    gtag('consent', 'update', consentMode);  
    localStorage.setItem('consentMode', JSON.stringify(consentMode));
  }