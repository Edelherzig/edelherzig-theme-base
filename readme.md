# Edelherzig Base Theme

WordPress Base Theme für Kundenprojekte (basiert auf RAFT).

## Features

- Full Site Editing (FSE)
- Restriktive theme.json (kein Custom Styling)
- Performance-optimiert
- Block-Pattern-Bibliothek

## Installation
```bash
git clone git@github.com:IhreEdelherzig/raft-base.git edelherzig-base
cd edelherzig-base
npm install
npm run build
```

## Development
```bash
npm run start  # Watch-Modus für Assets
```

## Anpassungen

Alle Edelherzig-spezifischen Anpassungen in:
- `inc/edelherzig-customizations.php`
- `assets/css/edelherzig-custom.css`
- `theme.json`

## Updates vom Upstream
```bash
git fetch upstream
git merge upstream/main
# Konflikte lösen
```
