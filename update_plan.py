import subprocess

plan_md = """1. *Mettre à jour l'architecture de la requête JSON-2 API*
   - L'API Odoo v19 JSON-2 n'utilise plus `/jsonrpc` avec le body `{"jsonrpc": "2.0", "method": "call", ...}`.
   - Les requêtes se font en POST sur `/json/2/{model}/{method}`.
   - L'authentification ne se fait plus dans le body avec uid, password/apikey, mais via un header `Authorization: Bearer {API_KEY}`.
   - La database est passée via un header `X-Odoo-Database` si nécessaire.
   - Modifier `OdooRequest` pour s'adapter à ce format.
2. *Mettre à jour les DTOs et APIs associés*
   - Les réponses JSON-2 API sont directement la réponse, sans le wrapper `result` sauf indication contraire dans la doc. S'il n'y a plus l'enveloppe JSON-RPC globale, il faudra ajuster `OdooApi` (vérifier s'il y a toujours un "error").
3. *Vérifications pre-commit*
   - Relancer PHPStan et PHP-CS-Fixer.
4. *Soumettre les modifications*
   - Utiliser `submit` avec un nouveau message de commit.
"""
print(plan_md)
