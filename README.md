# Mon projet Laravel Articles
# 📰 Laravel Articles

Un mini-projet Laravel pour la gestion d’articles, conçu dans le cadre d’un test technique.

---

## 🔧 Installation

```bash
git clone https://github.com/Ramanandafy/laravel-articles.git
cd laravel-articles

composer install

# Sous Linux/macOS :
cp .env.example .env

# Sous Windows PowerShell :
copy .env.example .env

php artisan key:generate

# Modifier la configuration DB dans le fichier .env

php artisan migrate

# (Optionnel) Générer des articles faker
php artisan tinker
\App\Models\Article::factory()->count(20)->create();


# (Optionnel) Générer pour y insérer des données
php artisan tinker
\App\Models\Article::create([
    'titre' => 'Mon premier article',
    'slug' => 'mon-premier-article',
    'contenu' => 'Contenu ici...',
    'auteur' => 'Edson',
    'date_publication' => '2025-05-28',
]);


php artisan serve
```

---

## 📁 Fonctionnalités

- CRUD complet des articles
- Génération de données fictives avec Factory
- Interface simple et intuitive (selon le test demandé)

---

## ✅ Pré-requis

- PHP >= 8.1
- Composer
- MySQL ou tout autre SGBD compatible Laravel
- Node.js & npm (si tu compiles les assets avec Laravel Mix ou Vite)

---

## 📄 Licence

Ce projet est open-source, sous licence MIT.
