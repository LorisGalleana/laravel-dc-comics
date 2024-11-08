# LARAVEL DC COMICS

## Descrizione

**Laravel DC Comics** è un'applicazione realizzata con **Laravel 10** per gestire un archivio di fumetti. Permette di visualizzare, aggiungere, modificare ed eliminare fumetti tramite un'interfaccia semplice. Ogni fumetto è rappresentato da un modello con vari attributi come titolo, autore, e anno di pubblicazione, e le operazioni CRUD sono gestite tramite un **resource controller**.

## Funzionalità

- **Visualizzazione elenco fumetti**: Una lista di tutti i fumetti registrati nel database.
- **Dettagli fumetto**: Ogni fumetto può essere visualizzato nel dettaglio, con informazioni complete.
- **Creazione fumetto**: Form per aggiungere nuovi fumetti al database.
- **Modifica fumetto**: Possibilità di modificare le informazioni di un fumetto esistente.
- **Eliminazione fumetto**: Rimozione di un fumetto dal database.
- **Validazione dei dati**: I dati inviati tramite i form sono validati per garantire che siano corretti e completi.

## Tecnologie Utilizzate

- **Laravel 10**: Framework PHP utilizzato per lo sviluppo dell'applicazione.
- **Eloquent ORM**: Per la gestione del database e delle relazioni tra i modelli.
- **Blade**: Motore di templating per la generazione dinamica delle view.
- **MySQL**: Database relazionale per la memorizzazione dei dati dei fumetti.
- **PHP**: Linguaggio di programmazione utilizzato nel backend.

## Funzionalità CRUD

- **Create**: Creazione di un nuovo fumetto tramite un form.
- **Read**:
  - **Index**: Visualizzazione dell'elenco di tutti i fumetti.
  - **Show**: Visualizzazione dei dettagli di un singolo fumetto.
- **Update**: Modifica dei dati di un fumetto esistente.
- **Delete**: Rimozione di un fumetto dal sistema.
