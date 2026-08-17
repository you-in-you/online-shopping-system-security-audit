# 🛡️ Online Shopping System - Security Audit & Hardening

[![License](https://img.shields.io/badge/License-Apache_2.0-blue.svg)](LICENSE)
[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php)](https://www.php.net/)
[![Security Audit](https://img.shields.io/badge/Status-In%20Progress-orange)](#)

> **Disclaimer:** This repository is a security-focused fork of the original [PuneethReddyHC/online-shopping-system](https://github.com/PuneethReddyHC/online-shopping-system). It serves as a hands-on laboratory for source code review, identifying OWASP Top 10 vulnerabilities, writing Proof-of-Concept (PoC) exploits, and refactoring legacy PHP code using secure coding practices.

---

## 📌 Project Goals
- **Source Code Audit:** Perform thorough static code analysis (SAST) and manual review on legacy PHP modules.
- **Vulnerability Remediation:** Fix critical vulnerabilities (e.g., SQL Injection, Plaintext Passwords, Broken Access Control).
- **Modernization:** Refactor raw SQL queries to Prepared Statements (PDO/MySQLi) and update deprecated code to support modern PHP versions.
- **Documentation:** Provide clear PoCs and explanation of vulnerabilities for educational and resume purposes.

---

## ⚠️ Identified & Fixed Vulnerabilities (Audit Log)

> NOTING yet.

*(This table will be updated as the audit progresses).*

---

## 🛠️ Environment & Setup (Podman / Docker)

### Prerequisites
- Container runtime (Podman / Docker) & Podman Compose / Docker Compose

### Quick Start
1. Clone the repository:

	```bash
	git clone [https://github.com/you-in-you/online-shopping-system-security-audit.git](https://github.com/you-in-you/online-shopping-system-security-audit.git)
	cd online-shopping-system-security-audit
	```


2. Spin up the containers (PHP-FPM/Apache + MariaDB):
	```bash
	podman-compose up -d --build
	```

3. Import the database schema from `database/onlineshop.sql`.
	```bash
	podman exec -i audit-db mariadb -u root -prootpassword onlineshop < database/onlineshop.sql
	```
4. Access the application at `http://localhost:8080`.

---

## 📄 License & Attribution

* Original application created by [PuneethReddyHC](https://github.com/PuneethReddyHC).
* Licensed under the [Apache License 2.0](https://www.google.com/search?q=LICENSE).
* Security refactoring, audit documentation, and patches maintained by [you-in-you](https://github.com/you-in-you).

