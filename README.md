# Desafio PHP: Verificador de Acesso e Registro de Logs

Projeto desenvolvido como parte do curso técnico na instituição **SENAI A. Jacob Lafer**.

---

* **Nome:** Lorena
* **Instituição:** SENAI A. Jacob Lafer
* **Formação:** Aluna de Curso Técnico

---

## 📌 Sobre o Projeto

Este repositório contém a solução do desafio de validação de idade e controle de acesso com gravação de histórico em PHP. O script processa os dados de um formulário HTML, calcula a idade do usuário e aplica as seguintes regras:

* **Usuários com 18 anos ou mais:** Exibe a mensagem `"Acesso permitido, [Nome]!"` e grava os dados no arquivo `log_acessos.txt`.
* **Menores de idade:** Exibe a mensagem `"Acesso negado, [Nome]!"` (sem gravação de log).

---

## ⚙️ Funcionalidades

* **Formulário de Entrada:** Solicita o **Nome** e o **Ano de Nascimento**.
* **Cálculo Dinâmico:** Processa a idade do usuário.
* **Persistência de Dados:** O arquivo `log_acessos.txt` é gerado/atualizado automaticamente pelo script PHP.

---

## 📂 Estrutura do Repositório

```text
.
├── 5a_desafio1.php     # Arquivo principal (Formulário + Lógica PHP)
└── log_acessos.txt     # Gerado automaticamente durante os testes

```

---

## 🚀 Como Executar

### Pré-requisitos

* PHP 7.4 ou superior instalado.
* Servidor web local (XAMPP, Laragon, WAMP) ou o servidor embutido do PHP.

### Passo a Passo

1. **Clonar o repositório:**
```bash
git clone https://github.com/seu-usuario/nome-do-repositorio.git
cd nome-do-repositorio

```


2. **Iniciar o servidor local do PHP:**
```bash
php -S localhost:8000

```


3. **Acessar no navegador:**
Abra o navegador e acesse: `
