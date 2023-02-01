import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CukorkakComponent } from './cukorkak.component';

describe('CukorkakComponent', () => {
  let component: CukorkakComponent;
  let fixture: ComponentFixture<CukorkakComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ CukorkakComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(CukorkakComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
