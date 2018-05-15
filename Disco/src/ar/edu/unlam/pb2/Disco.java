package ar.edu.unlam.pb2;

public class Disco {
	
	private Double radioInterior;
	private Double radioExterior;
	
	public Disco(Double radioInterior, Double radioExterior){
		this.radioInterior=radioInterior;
		this.radioExterior=radioExterior;
	}
	
	public Double perimetroInterior() {
		return 2*Math.PI*this.radioInterior;
	}
	
	public Double perimetroExterior() {
		return 2*Math.PI*this.radioExterior;
	}
	
	public Double superficieDisco() {
		return ((Math.PI*this.radioExterior*this.radioExterior)-(Math.PI*radioInterior*this.radioInterior));
	}
	
	public Double verRadioInterior() {
		return this.radioInterior;
	}
	
	public void cambiarRadioInterior(Double nuevoRadioInterior) {
		this.radioInterior=nuevoRadioInterior;
	}

	public Double verRadioExterior() {
		return this.radioExterior;
	}
	
	public void cambiarRadioExterior(Double nuevoRadioExterior) {
		this.radioExterior= nuevoRadioExterior;
	}
	
	
}
