# ACF Blocks – Promo Section

Wtyczka dostarcza niestandardowy blok Gutenberg „Promo Section” zbudowany w oparciu o Advanced Custom Fields PRO.

## Wymagania

* WordPress 6.0+
* Advanced Custom Fields PRO 6.1+ (wtyczka **must-have**)

## Instalacja

1. Sklonuj repozytorium **bezpośrednio** do katalogu `wp-content/plugins` lub załaduj paczkę ZIP przez kokpit WordPressa:

   ```bash
   # SSH / lokalnie w katalogu projektu
   cd wp-content/plugins
   git clone https://github.com/Miszczo/ignRecruitmentTask.git acf-block
   ```

2. W panelu WordPress przejdź do **Wtyczki → Zainstalowane** i **Aktywuj** „ACF Blocks – Promo Section”.

## Import grup pól ACF

Blok wymaga grupy pól zdefiniowanej w pliku `blocks/promo-section/fields.json`.

Masz dwie możliwości jej dodania:

### 1. Import przez narzędzie ACF (polecane)

1. W kokpicie WordPressa przejdź do **Custom Fields → Tools**.
2. W sekcji **Import Field Groups** kliknij **Import JSON**.
3. Wskaż plik:  
   `wp-content/plugins/acf-block/blocks/promo-section/fields.json`  
   i kliknij **Import**.
4. Po imporcie upewnij się, że grupa jest **włączona (Active)**.

### 2. Automatyczny load przez acf-json

Jeżeli korzystasz z mechanizmu sychronizacji ACF JSON:

1. Utwórz katalog `acf-json` w aktywnym motywie (jeśli jeszcze nie istnieje).
2. Skopiuj `fields.json` do `wp-content/themes/<twoj-motyw>/acf-json/group_promo_section_card.json`.
3. Odśwież kokpit – ACF wykryje nową grupę i zaproponuje jej synchronizację.

## Aktualizacja stylów/JS

Projekt wykorzystuje Vite (npm) do bundlowania zasobów. Aby przebudować pliki CSS/JS:

```bash
cd wp-content/plugins/acf-block
npm install          # jednorazowo
npm run build        # kompilacja produkcyjna
npm run dev          # tryb watch do developmentu
```

## Support

Masz pytania lub znalazłeś błąd?  
Otwórz issue w repozytorium lub skontaktuj się mailowo.
