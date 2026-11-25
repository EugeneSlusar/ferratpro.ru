(() => {
  const storageKey = 'ferratpro-plan-access';

  if (sessionStorage.getItem(storageKey) === 'granted') {
    return;
  }

  document.documentElement.style.visibility = 'hidden';

  if (window.prompt('Введите пароль для доступа к разделу «План работ»') === '12345') {
    sessionStorage.setItem(storageKey, 'granted');
    document.documentElement.style.visibility = '';
    return;
  }

  window.location.replace('/');
})();
