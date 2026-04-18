espessura_atual = 0.1
    
    # Distância em anos-Luz, convertido para quilometros (1 ano-luz = 9.461 x 10^12 km)
anos= float(input("digite a quantidade: "))
distancia_km = anos*  9.461 * 10**12
distancia_mm = distancia_km * 1000 * 1000
    
dobras = 0
    
print(f"Iniciando com {espessura_atual} mm")
    
while espessura_atual < distancia_mm:
    dobras += 1
    espessura_atual *= 2  # Dobra a espessura
        
    # Converte para km para facilitar a visualização
    espessura_km = espessura_atual / (1000 * 1000)
        
    print(f"Dobra {dobras}: {espessura_atual:,.2f} mm ({espessura_km:,.2f} km)")
        
print(f"\nConcluído! Foram necessárias {dobras} dobras.")
print(f"A espessura final é de {espessura_km:,.2f} km, cobrindo a distância de {anos} anos-luz.")