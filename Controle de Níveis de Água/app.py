from colorama import init, Fore, Style

init(autoreset=True)

situacoes = [
    (1, "Muito baixo (crítico)", Fore.RED),
    (2, "Baixo",                 Fore.YELLOW),
    (3, "Médio",                 Fore.GREEN),
    (4, "Alto",                  Fore.CYAN),
    (5, "Muito alto (alerta)",   Fore.BLUE),
]

def exibir_nivel(nivel, mensagem, cor):
    print(cor + f"Nível {nivel}: {mensagem}")

print("=== Monitoramento do Reservatório ===\n")

for nivel, mensagem, cor in situacoes:
    exibir_nivel(nivel, mensagem, cor)

print(Style.RESET_ALL)